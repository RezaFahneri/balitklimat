//sweetalert 2 
var flash = $('#flash').data('flash');
if (flash) {
    Swal.fire({
        icon: 'error',
        title: 'Peminjaman Barang',
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

var flash3 = $('#flash3').data('flash');
if (flash3) {
    Swal.fire({
        icon: 'error',
        title: 'Login',
        text: flash3,
    })
}

var flash4 = $('#flash3').data('flash');
if (flash4) {
    Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: flash4,
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

var flash6 = $('#flash5').data('flash');
if (flash6) {
    Swal.fire({
        icon: 'error',
        title: 'Data Kendaraan',
        text: flash6,
    })
}


//sweetalert2 tombol hapus
$(document).on('click', '#tombol-hapus1', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data satuan barang",
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

$(document).on('click', '#tombol-hapus2', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data Jenis barang",
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

$(document).on('click', '#tombol-hapus3', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Hapus data barang",
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

$(document).on('click', '#dipinjamkan1', function (e) {

    e.preventDefault();
    var href = $(this).attr('href')

    Swal.fire({
        title: 'Pinjamkan barang?',
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

$(document).on('click', '#logout', function (e) {

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

//filter statistik penggunaan mobil
filterSelection("semua")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == " ") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn-filter");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " ";
    });
}

// tooltip
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

//lama pemakaian penggunaan mobil sehari
$('#replybutton').click(function () {
    $('#reply').show()
})

function toggleText() {
    var x = document.getElementById("Myid");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function ShowHideDiv(btnPassport) {
    var dvPassport = document.getElementById("dvPassport");
    dvPassport.style.display = btnPassport.value == "Ya" ? "block" : "none";
}

function showperjalanan() {
    var status = document.getElementById("statusperjalanan");
    if(status.value == "Dalam Kota") {
        document.getElementById("lama_pakai").style.visibility="visible";
    }
    else {
        document.getElementById("lama_pakai").style.visibility="hidden";
    }
}