//sweetalert 2 
var flash = $('#flash').data('flash');
if (flash) {
    Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: flash,
    })
}

var flash2 = $('#flash2').data('flash');
if (flash2) {
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text: flash2,
    })
}

var flash5 = $('#flash5').data('flash');
if (flash5) {
    Swal.fire({
        icon: 'error',
        title: 'Data Barang',
        text: flash5,
    })
}


//sweetalert2 tombol hapus
$(document).on('click', '#hapus_pegawai', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data pegawai",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href
        }
    })
})

$(document).on('click', '#hapus_keg', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data jenis kegiatan",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})

$(document).on('click', '#hapus_kegiatan', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data kegiatan",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})
$(document).on('click', '#hapus_kota', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data kota",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})
$(document).on('click', '#hapus_perjalanan_dinas', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data perjalanan dinas",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})
$(document).on('click', '#hapus_anggota_perjalanan_dinas', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data anggota perjalanan dinas",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})
$(document).on('click', '#hapus_mak', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data MAK",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})

