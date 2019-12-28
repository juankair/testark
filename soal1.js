// Deklarasi function/method biodata
let biodata = (nama,umur) => {

    // Deklarasi variable address
    let address = "BTN Pasir Sembung - Blok D75";

    // Deklarasi vaiable hobbies
    let hobbies = ['Membaca','Coding','Menggambar'];

    // Deklarasi variable is_married
    let is_married = false;

    // Deklarasi variable list_school
    let list_school = [
        {
            key : 1,
            name: 'SMKN 1 Cianjur',
            year_in : 2015,
            year_out : 2018,
            major : 'Rekayasa Perangkat Lunak'
        }
    ]

    // Deklarasi variable skills
    let level = ['Beginner','Advanced','Expert']; //untuk mengurangi tindakan repetitif, jadi level dibuat array tinggal memanggil indexnya
    let skills = [
        {
            name : 'Bahasa Inggris',
            level : level[1]
        },
        {
            name : 'Javascript',
            level : level[2]
        },
        {
            name : 'Node.js',
            level : level[1]
        },
        {
            name : 'React Native',
            level : level[1]
        },
        {
            name : 'React.js',
            level : level[1]
        },
        {
            name : 'Laravel (PHP)',
            level : level[1]
        },
        {
            name : 'Codeigniter (PHP)',
            level : level[2]
        },
        {
            name : 'RestAPI',
            level : level[2]
        },
        {
            name : 'ASP.net (core & mvc)',
            level : level[1]
        },
        {
            name : 'Design UI UX (Adobe XD/Coreldraw)',
            level : level[1]
        },
    ]

    // Deklarasi variable interest_in_coding
    let interest_in_coding = true;


    // Deklarasi variable data untuk balikan hasil yang diinginkan
    let data = {
        name : nama,
        age : umur,
        address : address,
        hobbies : hobbies,
        is_married : is_married,
        list_school : list_school,
        skills : skills,
        interest_in_coding : interest_in_coding
    }
    return data;
}

// Contoh Eksekusi function/method dan menampilkannya di console browser 
console.log(biodata('Lambda Sangkala Murbawisesa',19));