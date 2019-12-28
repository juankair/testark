// list huruf vokal
let hurufVokal = ['a','i','u','e','o'];
// list huruf konsonan
let hurufKonsonan = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'y', 'z'];

// Pengecekan huruf;
let pengecekan = (words,huruf) => {
    let kata = words.toLowerCase().split(''); //pertama dilowercase kan agar sama dengan dictionary huruf vokal / konsonan, lalu displit berguna untuk dipisahkan menjadi array setiap hurufnya
    // pengulangan perhurufnya dari variable words
    kata.forEach(val => {
        // pengulangan perhurufnya dari variable huruf (parameter)
        huruf.forEach(v => {
            // pengecekan jika huruf words sama dengan huruf vokal/konsonan, maka console log kan;
            if(v == val){
                console.log(v);
            }
        });
    });
}


// Deklarasi fungsi/method menampilkan huruf vokal dan konsonan;
let printWords = (words) => {

    // Untuk mengurangi tindakan repetitif, maka dibuat fungsi untuk pengecekannya vokal & konsonan
    console.log('List huruf vokal : ');
    pengecekan(words,hurufVokal);
    
    console.log('List huruf konsonan : ');
    pengecekan(words,hurufKonsonan);
}

printWords('ARKADEMY');