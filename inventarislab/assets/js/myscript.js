//sweetalert 2 
var flash = $('#flash').data('flash');
if (flash) {
    Swal.fire({
        icon: 'error',
        title: 'Peminjaman Alat',
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
        title: 'Data Alat',
        text: flash5,
    })
}

var flash3 = $('#flash3').data('flash');
if (flash3) {
    Swal.fire({
        icon: 'error',
        title: 'Login',
        text: flash3,
    })
}


//sweetalert2 tombol hapus
$(document).on('click', '#tombol-hapus3',function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data alat",
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

$(document).on('click', '#dipinjamkan1',function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Pinjamkan alat',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Pinjamkan'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})

$(document).on('click', '#logout',function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Yakin Logout sistem?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = href;
        }
    })
})