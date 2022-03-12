<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-0">
                <div class="card-header py-6">
                <h3 class="m-0 font-weight-bold text-primary">Kalender Jadwal Kenaikan Gaji Berkala</h3><br>
                <div class="col-md-12 grid-margin">
                <!-- <div class="card-body"> -->
                    <div id="calendar"  style="height:100%; width:100%" style="font-size:4px" ></div>
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
document.addEventListener('DOMContentLoaded', function(){
    $('.date-picker').datepicker();
    $('#calendar').fullCalendar({
   editable: false,
   eventLimit: true, // allow "more" link when too many events
   header: {
        defaultDate: moment().format('YYYY-MM-DD'),
        left: 'prev,next today',
        center: 'title',
        right : 'month,basicWeek,basicDay'
    },
        events: '<?php echo base_url(); ?>kalender_kgb.php',
  });
  
 });

</script>
