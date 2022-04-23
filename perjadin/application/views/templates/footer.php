</body>
<footer class="footer">
    <div class="d-sm-flex text-center">
        <span class="text-muted text-center d-block d-sm-inline-block">Copyright ©️ 2022. Sistem Informasi Perjalanan Dinas Balitklimat .</span>
    </div>

    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>assets/js/template.js"></script>
    <script src="<?php echo base_url() ?>assets/js/settings.js"></script>
    <script src="<?php echo base_url() ?>assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
    <!-- MDBootstrap Datatables  -->
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/js/addons/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dtBasicExamplee').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script> -->

    <!-- Sweet Alert -->
    <script src="<?= base_url('assets'); ?>/js/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/ddtf.js"></script>
    <script src="<?= base_url('assets'); ?>/js/myscript.js"></script>
    <script>
        var table = document.getElementById("dtBasicExample"),
            sumHsl = 0;
        for (var t = 1; t < table.rows.length; t++) {
            sumHsl = sumHsl + parseInt(table.rows[t].cells[7].innerHTML);
        }
        document.getElementById("hasil").innerHTML = "Sum Value = " + sumHsl;
    </script>
    <script>
        jQuery('#dtBasicExample').ddTableFilter();
    </script>

    <script>
        var loadFile = function(event) {
            var foto_update = document.getElementById('foto_update');
            foto_update.src = URL.createObjectURL(event.target.files[0]);
            foto_update.onload = function() {
                URL.revokeObjectURL(foto_update.src) // free memory 
            }
            $('#foto').hide();
            $('#kamera').hide();
            // let element = document.getElementById("but");
            // let hidden = element.getAttribute("hidden");

            // if (!hidden) {
            //     element.removeAttribute("hidden");
            // }
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('#id_sbuh').select2({
            allowClear: true,
            placeholder: "--Pilih Provinsi--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#id_kota_asal').select2({
            allowClear: true,
            placeholder: "--Pilih Kota Asal--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#id_kota_tujuan').select2({
            allowClear: true,
            placeholder: "--Pilih Kota Tujuan--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#id_jabatan').select2({
            allowClear: true,
            placeholder: "--Pilih Jabatan--",
            theme: "bootstrap-5",
        });
    </script>
    <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets//DataTables/datatables.js">
    </script>
    <script>
        $('#nip_pj_rrr').select2({
            allowClear: true,
            placeholder: "--Pilih PJ RPTP / RDHP / RKTM--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_pj_keg').select2({
            allowClear: true,
            placeholder: "--Pilih Kasub / Kasie / Ka.Kelti--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#id_jenis_keg').select2({
            allowClear: true,
            placeholder: "--Pilih Jenis Kegiatan--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#kode_kegiatan').select2({
            allowClear: true,
            placeholder: "--Pilih Kode Kegiatan--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_verifikator').select2({
            allowClear: true,
            placeholder: "--Pilih Verifikator Perjalanan Dinas--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_kpa').select2({
            allowClear: true,
            placeholder: "--Pilih Kuasa Pengguna Anggaran--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_ppk').select2({
            allowClear: true,
            placeholder: "--Pilih Pejabat Pembuat Komitmen--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_bendahara').select2({
            allowClear: true,
            placeholder: "--Pilih Bendahara--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#kode_mak').select2({
            allowClear: true,
            placeholder: "--Pilih MAK--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#jenis_pengajuan').select2({
            allowClear: true,
            placeholder: "--Pilih Jenis Pengajuan--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#id_jenis_pd').select2({
            allowClear: true,
            placeholder: "--Pilih Jenis Perjalanan Dinas--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#id_jeken').select2({
            allowClear: true,
            placeholder: "--Pilih jenis kendaraan--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_kasub_bag_tu').select2({
            allowClear: true,
            placeholder: "--Pilih Ka. Sub Bag Tata Usaha--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_kepala_balai').select2({
            allowClear: true,
            placeholder: "--Pilih Kepala Balai--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_plt_kb').select2({
            allowClear: true,
            placeholder: "--Pilih Plh Kepala Balai--",
            theme: "bootstrap-5",
        });
    </script>
    <script>
        $('#nip_anggota_perjadin').select2({
            allowClear: true,
            placeholder: "--Pilih Pegawai--",
            theme: "bootstrap-5",
        });
    </script>
    <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets//DataTables/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    <script src="<?= base_url('assets'); ?>/js/rupiah.js"></script>

    <!-- rupiah -->

    <!-- button muncul input type -->
    <!-- <script>
        function kepBalai() {
            var x = document.getElementById("kb");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        function pltBalai() {
            var x = document.getElementById("pb");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script> -->
</footer>

</html>