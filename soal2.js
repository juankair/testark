// Deklarasi function/method pengecekan username
let is_name_valid = (name) => {
    let regex = /^[A-Z]{3}/; 
    // ^ = memulai dari awal string
    // [A-Z] = huruf kapital A sampai Z
    // {3} pengecekan apakah karakter 3 digit
    return regex.test(name);
}


// Deklarasi function/method pengecekan age
let is_age_valid = (age) => {
    let regex = /^[0-9]{2}$/;
    // ^ = memulai dari awal string
    // [0-9] = huruf dari 0 sampai 9
    // {2} = pengecekan apakah karakter 2 digit
    // $ = membatasi pengecekan, jangan ada karakter lagi didepannya , jadi di stop 2 digitnya
    return regex.test(age);   
}


// Deklarasi function/method pengecekan username
let is_username_valid = (username) => {
    let regex = /^[a-z]{4}_[0-9]{3}$/;
    // ^ = memulai dari awal string
    // [a-z]{4} = pengecekan untuk huruf kecil dengan 4 digit menggunakan
    // ada underscore (_) sebelum angka
    // [0-9]{3} = pengecekan angka dengan 3 digit
    // $ = membatasi karakter pengecekan
    return regex.test(username);
    
}

