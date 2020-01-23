<!-- <body class="gray" background="<?= base_url(); ?>assets/img/bakcc.png" style="background-position: center; background-repeat: no-repeat; "> -->
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header  card-header-icon">
                  <a href="" data-toggle="modal" data-target="#tambah"><div class="card-icon card-header-success"><i class="material-icons">person_add</i></div></a>
                  <a href="javascript:print()"><div class="card-icon card-header-info"><i class="material-icons">print</i></div></a>

                  <h4 class="card-title">DATA PESERTA PKKMB IKMI 2019</h4>
                </div>
        
                <div class="card-body" id="content" >
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <th>Nama</th>
                          <th>Asal Sekolah</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Nama Kelompok</th>
                          <th>Kelas Reguler</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (empty($peserta)) { ?>
                        <tr> 
                          <td colspan="8">Data tidak ditemukan</td> 
                        </tr> 
                      <?php
                        } else {
                        $no = 1;
                          foreach ($peserta->result() as $tampil) {
                          ?>
                        <tr>
                          <td><div align="center"><?php echo $no++ ?></div></td>
                          <td><div align="center"><?php echo $tampil->nama ?></div></td>
                          <td><div align="center"><?php echo $tampil->asal_sekolah ?></div></td>
                          <td><div align="center"><?php echo $tampil->alamat ?></div></td>
                          <td><div align="center"><?php echo $tampil->no_hp ?></div></td>
                          <td><div align="center"><?php echo $tampil->kelompok ?></div></td>                          
                          <td><div align="center"><?php echo $tampil->reguler ?></div></td>
                          <td class="td-actions text-right">

                            <!-- <button type="button" rel="tooltip" class="btn btn-success btn-round">
                              <i class="material-icons">edit</i>
                            </button> -->
                            <div align="center">
                            <button class="btn btn-success btn-round " rel="tooltip" data-toggle="modal" title="Edit Data <?php echo $tampil->nama;?> ?" data-target="#edit<?php echo $tampil->id_peserta;?>"> 
                            <i class="material-icons">edit</i></button> 
                           <!--  <a href="<?php echo base_url()?>index.php/peserta/hapus_peserta/<?php echo $tampil->id_peserta?>" rel="tooltip" class="btn-danger btn-round" onclick="return confirm('Anda yakin ingin menghapus Data <?php echo $tampil->nama;?> ?')" title="Hapus Data <?php echo $tampil->nama;?> ?">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                              <i class="material-icons">delete</i></a> -->
                               <a href="<?php echo base_url()?>index.php/peserta/hapus_peserta/<?php echo $tampil->id_peserta?>" rel="tooltip" class="btn-danger btn-round" title="Hapus Data <?php echo $tampil->nama;?> ?">
                            <button type="button" rel="tooltip" onclick="return confirm('Anda yakin menghapus data ini?')"  class="btn btn-danger btn-round">
                              <i class="material-icons">delete</i></a>
                            </button>
                          </div>
                          </td>
                        </tr>
                     <?php
                          }
                        }
                      ?>

                      </tbody>
                  </table>
                  </div>

                </div>
                       <!-- end content-->
              </div>
              <!--  end card  -->

            </div>
            <!-- end col-md-12 -->

          </div>
          <!-- end row -->

        </div>

      </div>

      <!-- ============ MODAL TAMBAH MATA KULIAH =============== -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" 
aria-labelledby="largeModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<!--<div class="modal-header"></div>-->
<div  class="col-lg-12">
<div class="card-header card-header-rose">
<div class="card-text"><i class='fa fa-plus'></i>&nbsp;FORM TAMBAH PESERTA
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close [x]
</button></div></div>
<!-- <div class="card-header card-header-rose ">
                    <div class="card-text">
                      <h4 class="card-title">Range Validation</h4>
                    </div>
                    </div> -->
<!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/peserta/simpan_peserta'?>" 
method="post" autocomplete="on"/>
<div class="form-group">
  <label>ID PESERTA</label>
    <input class="form-control" name="T0" id="T0" required />
    <!-- <p class="help-block">Contoh : MKT-0001, MKT-0002, dll.</p> -->
</div>
<div class="form-group">
  <label>NAMA PESERTA</label>
    <input class="form-control" name="T1" id="T1"  maxlength="8" 
  required />
    <!-- <p class="help-block">Contoh : BUDI DOR, BAMBANG M, dll.</p> -->
</div>
<div class="form-group">
  <label>ASAL SEKOLAH</label>
    <input class="form-control" name="T2" id="T2" 
  required />
    <!-- <p class="help-block">Contoh : SMA UJUNG KULON, MAN CKL, dll.</p> -->
</div>
<div class="form-group">
  <label>ALAMAT</label><br/>
    <input class="form-control" name="T3"  id="T3" 
  required>
  <!-- <p class="help-block">Contoh : RT/RW, DESA, KECAMATAN, KABUPATEN dll</p> -->
</div>
<div class="form-group">
    <label>NO HP</label>
  <input class="form-control" name="C1" type="number" id="C1"
  required>
  <!-- <p class="help-block">Contoh : 0867*********6 dll</p> -->
</div>
<div class="form-group">
  <label>KELOMPOK</label>
    <textarea class="form-control" name="T4" id="T4" 
  required></textarea>
    <!-- <p class="help-block">Contoh : KELOMPOK ...</p> -->
</div>
<div class="form-group">
  <label>REGULER</label>
    <textarea class="form-control" name="T5" id="T5" 
  required></textarea>
    <!-- <p class="help-block">Contoh : REGULER PAGI/SORE ...</p> -->
</div>
<div class="form-group" class="modal-footer">
  <button type="submit" class="btn btn-primary">SIMPAN DATA PESERTA</button>
  <button type="reset" class="btn btn-success">R E S E T</button>
  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">T U T U P [X]
  </button>
</div>
</form>
</div><!-- /.row --></div><!-- /.col-lg-12 --></div><!-- /.panel-body -->
</div><!-- /.panel panel-default --></div><!-- /.col-lg-12 -->
<!-- Akhir Source Code - Form Tambah Mata Kuliah -->
</div><!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal fade -->


 <!-- ============ MODAL EDIT MATA KULIAH =============== -->
<?php
  foreach($peserta->result_array() as $tampil):
    $id_peserta=$tampil['id_peserta'];
    $nama=$tampil['nama'];
    $asal_sekolah=$tampil['asal_sekolah'];   
    $alamat=$tampil['alamat'];
    $no_hp=$tampil['no_hp'];
    $kelompok=$tampil['kelompok'];
    $reguler=$tampil['reguler'];
?>
<div class="modal fade" id="edit<?php echo $id_peserta;?>" tabindex="1" 
role="dialog" aria-labelledby="largeModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<!-- -->
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>&nbsp;FORM UBAH DATA PESERTA 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close [x]
</button></div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/peserta/update_peserta'?>" 
method="post" autocomplete="on"/>
<br><div class="form-group">
  <label>ID PESERTA</label><br>
    <input class="form-control" name="T0" id="T0" value="<?php echo $id_peserta;?>" 
  readonly="readonly" required />
    <!-- <p class="help-block">Contoh : MKT-0001, MKT-0002, dll.</p> -->
</div>
<div class="form-group">
  <label>NAMA PESERTA</label>
    <input class="form-control" name="T1" id="T1" value="<?php echo $nama;?>"
  required />
    <!-- <p class="help-block">Contoh : MKDU-0001, MKDK-0001, dll.</p> -->
</div>
<div class="form-group">
  <label>ASAL SEKOLAH</label>
    <input class="form-control" name="T2" id="T2" value="<?php echo $asal_sekolah;?>" 
  required />
    <!-- <p class="help-block">Contoh : P. Web 3, D. Web 3, dll.</p> -->
</div>
<div class="form-group">
  <label>ALAMAT</label>
    <input class="form-control" name="T3" id="T3" value="<?php echo $alamat;?>" 
  required>
  <!-- <p class="help-block">Contoh : 1, 2, 3, dll</p> -->
</div>
<div class="form-group">
    <label>No HP</label>
  <input class="form-control" name="C1" id="C1" value="<?php echo $no_hp;?>" 
  required>
  <!-- <p class="help-block">Contoh : Pilih Salah Satu.</p> -->
</div>
<div class="form-group">
  <label>Nama Kelompok</label>
    <input class="form-control" name="T4" id="T4" value="<?php echo $kelompok;?>">
  </input>
    <!-- <p class="help-block">Contoh : Keterangan ...</p> -->
</div>
<div class="form-group">
  <label>Kelas Reguler</label>  
    <input class="form-control" name="T5" id="T5" value="<?php echo $reguler;?>" 
  required>
  <!-- <p class="help-block">Contoh : 1, 2, 3, dll</p> -->
</div>
<div class="form-group" class="modal-footer">
  <button type="submit" class="btn btn-primary">UPDATE PESERTA</button>
  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">T U T U P [X]
  </button>
</div>
</form>
</div><!-- /.row --></div><!-- /.col-lg-12 --></div><!-- /.panel-body -->
</div><!-- /.panel panel-default --></div><!-- /.col-lg-12 -->
<!-- Akhir Source Code - Form edit Mata Kuliah -->
</div><!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal fade -->
<?php endforeach;?>
<!--END MODAL EDIT MATA KULIAH-->   
<script>
    $(document).ready(function() {
      // Initialise Sweet Alert library
      demo.showSwal();
    });
  </script>