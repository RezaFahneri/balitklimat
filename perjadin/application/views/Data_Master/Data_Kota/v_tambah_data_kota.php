<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('kota') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Tambah Kota</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('kota/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label><b>Kota / Kabupaten</label>
                                        <input type="text" name="kota" class="form-control" required>
                                        <?php echo form_error('kota', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label></br>
                                        <select name="id_sbuh" id="id_sbuh" class="form-control" required>
                                            <option value="">--Pilih Provinsi--</option>
                                            <?php foreach ($provinsi as $row) { ?>
                                                <option value="<?php echo $row->id_sbuh; ?>"><?php echo $row->nama_provinsi ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Luar Kota </label>
                                        <input type="text" class="form-control" name="luar_kota" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Dalam Kota </label>
                                        <input type="text" readonly class="form-control" name="dalam_kota" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>&nbsp &nbsp
                                    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#id_sbuh').on('input', function() {

                var id_sbuh = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('kota/get_data_sbuh') ?>",
                    dataType: "JSON",
                    data: {
                        id_sbuh: id_sbuh
                    },
                    cache: false,
                    success: function(data) {
                        $.each(data, function(id_sbuh, luar_kota, dalam_kota) {
                            $('[name="luar_kota"]').val(data.luar_kota);
                            $('[name="dalam_kota"]').val(data.dalam_kota);
                        });

                    }
                });
                return false;
            });

        });
    </script>