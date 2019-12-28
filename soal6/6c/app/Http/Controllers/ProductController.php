<?php

namespace App\Http\Controllers;
require 'vendor/autoload.php';

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Product;
use App\Cashier;
use App\Category;
use DB;

class ProductController extends Controller
{
    public function etalaseProduk(){
        $data['listProduk'] = DB::table('products')
                            ->select(
                                'products.*',
                                'cashiers.name as cashierName',
                                'categories.name as categoriesName'
                                )
                                ->join('cashiers','products.cashierID','cashiers.id')
                                ->join('categories','products.categoryID','categories.id')
                                ->get();
        $data['dataKasir'] = Cashier::all();
        $data['dataKategori'] = Category::all();

        return view('etalaseProduk',$data);   
    }

    public function submitProduk(Request $request){
        $uuid = Uuid::uuid4();

        Product::create([
            'id' => $uuid,
            'categoryID' => $request->input('categoryID'),
            'cashierID' => $request->input('cashierID'),
            'name' => $request->input('productName'),
            'price' => $request->input('price'),
        ]);
    }
    
    public function editProduk(Request $request){
        Product::where('id',$request->input('productID'))
        ->update([
            'categoryID' => $request->input('categoryID'),
            'cashierID' => $request->input('cashierID'),
            'name' => $request->input('productName'),
            'price' => $request->input('price'),
        ]);
    }

    public function deleteProduk(Request $request){
        Product::where('id',$request->input('productID'))->delete();
    }
}
