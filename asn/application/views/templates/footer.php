<!-- content-wrapper ends
<!- partial:partials/_footer.html -->
</body>
<footer class="footer fixed-bottom">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Balai Penelitian
            Agroklimat dan Hidrologi 2022 </span>
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
<!-- jquery validate -->
<!-- <script src="<?//php echo base_url() ?>assets/js/jquery-validate/jquery-validate.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js">
</script>
<!-- fullcalendar -->

<script src="<?= base_url('assets'); ?>/js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/moment.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript"
    src="<?php echo base_url() . 'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>
<!-- Sweetalert -->
<script src="<?= base_url('assets'); ?>/js/sweetalert/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/myscript.js"></script>
<!-- ddtf -->
<script src="<?= base_url('assets'); ?>/js/select2.js"></script>
<script src="<?= base_url('assets'); ?>/js/ddtf/ddtf.js"></script>

<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->

<script>
var loadFile = function(event) {
    var foto_update = document.getElementById('foto_update');
    foto_update.src = URL.createObjectURL(event.target.files[0]);
    foto_update.onload = function() {
        URL.revokeObjectURL(foto_update.src) // free memory 
    }
    $('#foto').hide();
    $('#kamera').hide();
};
</script>
<!-- collapse -->
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</footer>

</html>