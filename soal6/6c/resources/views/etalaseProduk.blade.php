@include('layout/header')

@include('layout/navigation')


      
      <div class="container" style="margin-top: 30px;">
          <div class="card" style="border-radius: 15px;">
              <div class="card-body">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Cashier</th>
                              <th>Product</th>
                              <th>Category</th>
                              <th>Price</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($listProduk as $key => $value)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <td>{{ $value->cashierName }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->categoriesName }}</td>
                                <td>{{ $value->price }}</td>
                                <td><b class="btn-edit" catID="{{$value->categoryID}}" casID="{{ $value->cashierID }}" productID="{{ $value->id }}" style="color:#ACE087;cursor: pointer;">Edit</b> | <b productID="{{ $value->id }}" class="btn-delete" style="color:#FF8FB2;cursor: pointer;">Delete</b></td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      



      <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="fcafe">
                    {{ csrf_field() }}
                    <input type="hidden" name="productID">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Cashier</label>
                            <select class="form-control" name="cashierID">
                                @foreach($dataKasir as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Product</label>
                            <input type="text" class="form-control" placeholder="Product Name" name="productName">
                        </div>
                        <div class="col-md-6">
                            <label for="">Category</label>
                            <select class="form-control" name="categoryID">
                                @foreach($dataKategori as $value)
                                    <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Price</label>
                            <input type="number" class="form-control" placeholder="Price" name="price">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-submit btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

@include('layout/footer')
<script>

var status;

        $(document).on('click','.btn-add',function(e){
            status = 'insert';
            $('.modal-title').text('ADD');
            $('.btn-submit').text('ADD');
            $('.fcafe')[0].reset();

            $('.modal').modal('show');
            
        });

        $(document).on('click','.btn-edit',function(e){
            status = 'update';
            $('.modal-title').text('EDIT');
            $('.btn-submit').text('EDIT');

            let id = $(this).attr('productID');
            let nama = $(this).attr('casID');
            let product = $(this).closest('tr').find('td:eq(1)').text();
            let category = $(this).attr('catID');
            let price = Number($(this).closest('tr').find('td:eq(3)').text().match(/\d/g).join().replace(/,/g, ''));

            $('[name="productID"]').val(id);
            $('[name="cashierID"]').val(nama);
            $('[name="productName"]').val(product);
            $('[name="categoryID"]').val(category);
            $('[name="price"]').val(price);

            $('.modal').modal('show');
        });

        $(document).on('click','.btn-submit',function(e){
            $('.fcafe').submit();
        });


        $('.fcafe').on('submit',function(e){
            e.preventDefault();

            swal({
            title: "Confirmation",
            text: "Are You Sure To "+ (status == 'insert' ? 'Submit' : 'Edit') +" This Data?",
            icon: "info",
            buttons: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                if(status == 'insert'){
                    $.post('{{ url("product/save") }}',$('.fcafe').serializeArray(),function(data){ 
                        swal('Success','Data Has Been Saved','success').then(location.reload());
                    });
                }else{
                    $.post('{{ url("product/edit") }}',$('.fcafe').serializeArray(),function(data){ 
                        swal('Success','Data Has Been Updated','success').then(location.reload());
                    });
                    
                }
                $('.modal').modal('hide');
            }
            });
        });


        $(document).on('click','.btn-delete',function(e){
            let cashier = $(this).closest('tr').find('td:eq(0)').text();
            let id = $(this).closest('tr').find('th:eq(0)').text();

            let uuid = $(this).attr('productID');
            console.log(uuid);
            swal({
            title: "Confirmation",
            text: "Are You Sure To Delete Data " + cashier + " #"+ id,
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.post('{{ url("product/delete") }}', {"_token": "{{ csrf_token() }}","productID":uuid},function(data){
                    swal('Success','Data Has Been Deleted','success').then(location.reload());
                });
            }
            });
        });
    </script>