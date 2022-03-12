<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <a title="Kembali"
                                    class="btn btn-sm btn-success" style="border-radius:90px; color:white"
                                    href="<?php echo site_url('kegiatan') ?>"><i class="ti ti-arrow-left"
                                        style="border-radius:8px"></i></a>
                        <br><br><h3 class="m-0 font-weight-bold text-primary">Tambah Data Kegiatan</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('kegiatan/tambah_aksi') ?>">
                                    <div class="form-group">
                                        <label><b>Kode Kegiatan</b></label>
                                        <input type="hidden" name="biaya_pengeluaran" value=0 class="form-control" required>                                    
                                        <input type="text" name="kode_kegiatan" class="form-control" required>
                                        <?php echo form_error('kode_kegiatan', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Judul Kegiatan</b></label>
                                        <input type="text" name="judul_kegiatan" class="form-control" required>
                                        <?php echo form_error('judul_kegiatan', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Jenis Kegiatan</b></label></br>
                                        <select name="id_jenis_keg" id="id_jenis_keg" class="form-control" required>
                                            <option value="">--Pilih Jenis Kegiatan--</option>
                                            <?php foreach ($jenis_kegiatan as $row) { ?>
                                                <option value="<?php echo $row->id_jenis_keg; ?>"><?php echo $row->jenis_keg; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Tahun</b></label>
                                        <input type="text" name="tahun" class="form-control" required>
                                        <?php echo form_error('tahun', '<div class="text-small text-danger"></div>') ?>
                                    </div>
                                   
                                    <!-- <div class="form-group">
                                        <label><b>Nama PJ Kegiatan</b></label>
                                        <input type="text" name="nama_pj_keg" class="form-control" required>
                                        <?php //echo form_error('judul_kegiatan', '<div class="text-small text-danger"></div>') ?>
                                    </div> -->
                                    <div class="form-group">
                                        <label><b>PJ RPTP / RDHP / RKTM</b></label></br>
                                        <select name="nip_pj_rrr" id="nip_pj_rrr" class="form-control" required>
                                            <option value="">--Pilih PJ RPTP / RDHP / RKTM--</option>
                                            <?php foreach ($nip_pj as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip." | ".$row->nama_pegawai; ?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Kasub / Kasie / Ka.Kelti</b></label></br>
                                        <select name="nip_pj_keg" id="nip_pj_keg" class="form-control" required>
                                            <option value="">--Pilih Kasub / Kasie / Ka.Kelti--</option>
                                            <?php foreach ($nip as $row) { ?>
                                                <option value="<?php echo $row->nip; ?>"><?php echo $row->nip." | ".$row->nama_pegawai?></option>';
                                                }
                                            <?php } ?>
                                        </select>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>&nbsp &nbsp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a> -->
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			 $('#nip_pj_keg').on('input',function(){
                
                var nip_pj_keg=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('kegiatan/get_pegawai')?>",
                    dataType : "JSON",
                    data : {nip_pj_keg: nip_pj_keg},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nip_pj_keg, nama_pj_keg){
                            $('[name="nama_pj_keg"]').val(data.nama_pj_keg);
                        });
                        
                    }
                });
                return false;
           });

		});
	</script>