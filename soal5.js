let createArray = (num) => {
    let data = new Array(); //deklarasi variable data sebagai array object
    let numVal = 1;
    for(let a = 0; a < num; a++ ){
        data[a] = new Array(); //deklarasi layer value dari index
        for(let i = 0; i < num; i++){
            data[a][i] = numVal; // memasukan valuenya
            numVal++;
        }
    }
    return data;
}

let createMatrix = (num) => {
    let dataArray = createArray(num); // membuat array dimensi sesuai input parameter `num`
    let ir = dataArray.length - 1; // index reverse (untuk mendapatkan index dari index terakhir)
    let d1 = 0; // digit 1 (untuk angka dari atas ke bawah)
    let d2 = 0; // digit 2 (untuk angka dari bawah ke atas)

    for(let a = 0; a < dataArray.length; a++){
        d1 += dataArray[a][a]; // menjumlahkan hasil dari angka terkecil ke atas
        d2 += dataArray[ir][a]; // menjumlahkan hasil dari angka terbesar ke bawah
        ir--;
    }

    
    return d1 * d2;
    
}


console.log(createMatrix(3));