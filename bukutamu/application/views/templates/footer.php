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
<script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.select.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/select2/select2.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
<script src="<?php echo base_url() ?>assets/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url() ?>assets/js/template.js"></script>
<script src="<?php echo base_url() ?>assets/js/settings.js"></script>
<script src="<?php echo base_url() ?>assets/js/todolist.js"></script>
<script src="<?= base_url('assets/'); ?>js/select2.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url() ?>assets/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/addons/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

<script>
    function keperluan() {
        var x = document.getElementById("ckeperluan");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    function alasan() {
        var x = document.getElementById("calasan");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    $(document).ready(function() {
        $('#peg_bukutamu').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_bukutamu td').css('white-space', 'initial');
        $('#adm_peg').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#adm_peg td').css('white-space', 'initial');
        $('#adm_pes').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#adm_pes td').css('white-space', 'initial');
        $('#peg_bukutamu_b').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#peg_bukutamu_b td').css('white-space', 'initial');
        $('#adm_bukutamu').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#adm_bukutamu td').css('white-space', 'initial');
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
        $('#pes_lap').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#pes_penugasan').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
        $('#pes_lapak').DataTable({
            lengthMenu: [25, 50, 75, 100],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });
    });
</script>
</body>

</html> -->