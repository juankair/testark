
let sortNumber = (num) => {
    let num1 = num.match(/\d/g); // menghilangkan huruf jika memuatnya
    let number = (num1 ? num1.join('') : 'No number found in parameter!'); // karna hasil dari match adalah array, maka dijoin, jika num1 tidak memuat angka sama sekali maka hasilkan pesan

    return number;
}


console.log(sortNumber("abc"));