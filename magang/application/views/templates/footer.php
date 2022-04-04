<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer fixed-bottom">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Balai Penelitian Agroklimat dan Hidrologi 2022 </span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
<!-- plugins:js -->
<script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?= base_url() ?>assets/js/dataTables.select.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/select2/select2.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>assets/js/template.js"></script>
<script src="<?= base_url() ?>assets/js/settings.js"></script>
<script src="<?= base_url() ?>assets/js/todolist.js"></script>
<script src="<?= base_url('assets/'); ?>js/select2.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>assets/js/dashboard.js"></script>
<script src="<?= base_url() ?>assets/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<script type="text/javascript" src="<?= base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/addons/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#peg_penugasan').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_penugasan td').css('white-space', 'initial');
        $('#peg_pes td').css('white-space', 'initial');
        $('#peg_pes').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_laporan td').css('white-space', 'initial');
        $('#peg_laporan').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_laporan2 td').css('white-space', 'initial');
        $('#peg_laporan2').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_lapak').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_lapak td').css('white-space', 'initial');
        $('#pes_lap td').css('white-space', 'initial');
        $('#pes_lap').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#adm_pes td').css('white-space', 'initial');
        $('#adm_pes').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#pes_penugasan td').css('white-space', 'initial');
        $('#pes_penugasan').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#pes_lapak td').css('white-space', 'initial');
        $('#pes_lapak').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#det_pes td').css('white-space', 'initial');

    });
</script>
<!-- <script>
    $(document).ready(function() {
        $('#peg_pes').DataTable({
            lengthMenu: [25, 50, 75, 100]
        });

    });
</script> -->
<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    function addrev() {
        var x = document.getElementById("crev");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function showdettgsps() {
        var x = document.getElementById("dettgsps");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function showttgspm() {
        var x = document.getElementById("ttgspm");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function shownp() {
        var x = document.getElementById("np");
        var y = document.getElementById("nl");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function shownl() {
        var y = document.getElementById("np");
        var x = document.getElementById("nl");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function showlap() {
        var x = document.getElementById("tlap");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function showdetpm() {
        var x = document.getElementById("detpm");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function admshowpes() {
        var x = document.getElementById("admshwpes");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jenis').on('change', function() {
            var jns = $(this).val();
            if (jns == 'Mandiri') {
                $('#test').prop('hidden', true);
                $('#test1').prop('hidden', true);
            } else {
                $('#test').prop('hidden', false);
                $('#test1').prop('hidden', false);

            }
        });
    });
</script>
<script>
    function ks() {
        var x = document.getElementById('ks').type;
        if (x == 'password') {
            document.getElementById('ks').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
        } else {
            document.getElementById('ks').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
        }
    }

    function ks2() {
        var x = document.getElementById('ks2').type;
        if (x == 'password') {
            document.getElementById('ks2').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
        } else {
            document.getElementById('ks2').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
        }
    }

    function ks3() {
        var x = document.getElementById('ks3').type;
        if (x == 'password') {
            document.getElementById('ks3').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
        } else {
            document.getElementById('ks3').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
        }
    }
</script>
</body>

</html> -->