// var rupiah_luar_kota = document.getElementById("rupiah_luar_kota");
// rupiah_luar_kota.addEventListener("keyup", function (e) {
//     // tambahkan 'Rp.' pada saat form di ketik
//     // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
//     rupiah_luar_kota.value = formatRupiah(this.value, "Rp");
// });

// /* Fungsi formatRupiah */
// function formatRupiah(angka, prefix) {
//     var number_string = angka.replace(/[^,\d]/g, "").toString(),
//         split = number_string.split(","),
//         sisa = split[0].length % 3,
//         rupiah_luar_kota = split[0].substr(0, sisa),
//         ribuan = split[0].substr(sisa).match(/\d{3}/gi);

//     // tambahkan titik jika yang di input sudah menjadi angka ribuan
//     if (ribuan) {
//         separator = sisa ? "." : "";
//         rupiah_luar_kota += separator + ribuan.join(".");
//     }

//     rupiah_luar_kota = split[1] != undefined ? rupiah_luar_kota + "," + split[1] : rupiah_luar_kota;
//     return prefix == undefined ? rupiah_luar_kota : rupiah_luar_kota ? "Rp" + rupiah_luar_kota : "";
// }

// var rupiah_dalam_kota = document.getElementById("rupiah_dalam_kota");
// rupiah_dalam_kota.addEventListener("keyup", function (e) {
//     // tambahkan 'Rp.' pada saat form di ketik
//     // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
//     rupiah_dalam_kota.value = formatRupiah(this.value, "Rp");
// });

// /* Fungsi formatRupiah */
// function formatRupiah(angka, prefix) {
//     var number_string = angka.replace(/[^,\d]/g, "").toString(),
//         split = number_string.split(","),
//         sisa = split[0].length % 3,
//         rupiah_dalam_kota = split[0].substr(0, sisa),
//         ribuan = split[0].substr(sisa).match(/\d{3}/gi);

//     // tambahkan titik jika yang di input sudah menjadi angka ribuan
//     if (ribuan) {
//         separator = sisa ? "." : "";
//         rupiah_dalam_kota += separator + ribuan.join(".");
//     }

//     rupiah_dalam_kota = split[1] != undefined ? rupiah_dalam_kota + "," + split[1] : rupiah_dalam_kota;
//     return prefix == undefined ? rupiah_dalam_kota : rupiah_dalam_kota ? "Rp" + rupiah_dalam_kota : "";
// }

