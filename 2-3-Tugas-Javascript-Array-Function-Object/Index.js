// Soal 1
var daftarHewan = ["2. Komodo", "5. Buaya", "3. Cicak", "4. Ular", "1. Tokek"];
// jawaban soal 1
var sort_daftar = daftarHewan.sort();
for (let index = 0; index < sort_daftar.length; index++) {
  console.log(sort_daftar[index]);
}

// ========================================================================================= //
// Soal 2
var data = {
  name: "John",
  age: 30,
  address: "Jalan Pelesiran",
  hobby: "Gaming",
};

// Jawaban Soal 2
function introduce(data) {
  return (
    "Nama saya " +
    data.name +
    ", " +
    " Umur Saya " +
    data.age +
    " Tahun " +
    " Alamat saya di jalan " +
    data.address +
    " dan saya punya hobby yaitu Gaming " +
    data.hobby
  );
}
console.log(introduce(data));
// ==================================== //

// Soal 3
// var hitung_1 = hitung_huruf_vokal("Muhammad");
// var hitung_2 = hitung_huruf_vokal("Iqbal");
// console.log(hitung_1, hitung_2); // 3 2

// Jawaban Soal 3
function hitung_huruf_vokal(str) {
  var daftarVokal = "aiueo";
  var hitungVokal = 0;
  for (let i = 0; i < str.length; i++) {
    if (daftarVokal.indexOf(str.toLowerCase()[i]) !== -1) {
      hitungVokal += 1;
    }
  }
  return hitungVokal;
}
var hitung_1 = "Muhammad";
var hitung_2 = "Iqbal";
console.log(hitung_huruf_vokal(hitung_1));
// ====================================================================== //
// Soal 4
// Input dan output dari sebuah function
// console.log( hitung(0) ) // -2
// console.log( hitung(1) ) // 0
// console.log( hitung(2) ) // 2
// console.log( hitung(3) ) // 4
// console.log( hitung(5) ) // 8

// Jawaban Soal 4

function hitung(input) {
  return 2 * input - 2;
}
var hasil = hitung(1);
console.log(hasil);

// ============== Semua Tugas Selesai Dikerjakan ============ //
