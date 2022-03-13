<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-0">
                    <div class="card-header py-6">
                        <h3 class="m-0 font-weight-bold text-primary">
                            <h3 class="m-0 font-weight-bold text-primary"><a title="Kembali"
                                    class="btn btn-sm btn-secondary" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('jadwal_kp') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>&nbsp Kalender Jadwal Kenaikan Pangkat</h3>
                            <br>
                            <div class="col-md-12 grid-margin">
                                <!-- <div class="card-body"> -->
                                <div id="calendar" style="height:100%; width:100%" style="font-size:4px"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
// membuat jquery
document.addEventListener('DOMContentLoaded', function() {
    $('.date-picker').datepicker();
    $('#calendar').fullCalendar({
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        header: {
            defaultDate: moment().format('YYYY-MM-DD'),
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        events: '<?php echo base_url(); ?>kalender_kp.php',
        // events: '<?php echo base_url(); ?>jadwal_kp/kalender',

        //    events: [
        //     {
        //      //title: '<?php echo base_url(); ?>jadwal_kp/kalender'. $nip',
        //      title: 'dda',
        //      start: '2022-02-12',
        //     },
        // events: "<?php echo base_url(); ?>jadwal_kp/kalender",
        //     {
        //      //title: '<?php echo base_url(); ?>jadwal_kp/kalender'. $nip',
        //      title: 'dda',
        //      start: '2022-02-01',
        //     },

        //    ]
    });

});
</script>