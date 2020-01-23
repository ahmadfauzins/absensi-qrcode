<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header  card-header-icon">
                  <!-- <a href="" data-toggle="modal" data-target="#tambah"><div class="card-icon card-header-success"><i class="material-icons">person_add</i></div></a> -->
                  <a href="javascript:print()"><div class="card-icon card-header-info"><i class="material-icons">print</i></div></a>

                  <h4 class="card-title">DATA ABSENSI PKKMB IKMI 2019</h4>
                </div>
        
                <div class="card-body" id="content" >
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr >
                          <th>No</th>
                          <!-- <th>ID MENTOR</th> -->
                          <th>NAMA PESERTA</th>
                          <th>GUGUS MENTOR</th>
                          <th>NAMA MENTOR</th>
                          <th>TANGGAL</th>
                          <th>BERANGKAT</th>
                          <th>PULANG</th>
                          <!-- <th class="text-right">Actions</th> -->
                        </tr>
                      </thead>

                      <tbody>
                        <?php if (empty($absensi)) { ?>
                        <tr> 
                          <td colspan="8">Data tidak ditemukan</td> 
                        </tr> 
                      <?php
                        } else {
                        $no = 1;
                          foreach ($absensi->result() as $tampil) {
                          ?>
                        <tr  style="padding-left: 20px;">
                          <td><div align="center"><?php echo $no++ ?></div></td>
                          <td><div align="center"><?php echo $tampil->nama ?></div></td>
                          <td><div align="center"><?php echo $tampil->mentor ?></div></td>
                          <td><div align="center"><?php echo $tampil->nama_mentor ?></div></td>
                          <td><div align="center"><?php echo $tampil->tanggal ?></div></td>
                          <td><div align="center"><?php echo $tampil->waktu_masuk ?></div></td>         
                          <td><div align="center"><?php echo $tampil->waktu_pulang ?></div></td> 
                        <!--   <td><div align="center"><?php echo $tampil->foto ?></div></td> -->
                  
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
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>&nbsp;FORM TAMBAH PESERTA 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close [x]
</button></div></div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'mentor/simpan_mentor'?>" 
method="post" enctype="multipart/form-data" autocomplete="on"/>
<div class="form-group">
  <label>ID MENTOR</label>
    <input class="form-control" name="T0" id="T0" required />
    <!-- <p class="help-block">Contoh : MKT-0001, MKT-0002, dll.</p> -->
</div>
<div>
  <label>NAMA MENTOR</label>
    <input class="form-control" name="T1" id="T1" placeholder="Ketikan Kode Mata Kuliah" 
  required />
    <!-- <p class="help-block">Contoh : BUDI DOR, BAMBANG M, dll.</p> -->
</div>
<div>
  <label>KELOMPOK</label>
    <input class="form-control" name="T4" id="T4" placeholder="Ketikkan Keterangan" 
  required></input>
    <!-- <p class="help-block">Contoh : KELOMPOK ...</p> -->
</div>
<label>FOTO</label>
<div class="form-group"><div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="../../assets/img/image_placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="F1" id="F1" required/>
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>

  
    <!-- <input type="file" name="F1" id="F1" onchange="tampilkanPreview(this,'preview')" required />
    <p class="help-block">Contoh : *.jpg, *.png, dll</p>
  <br>
  <img id="preview" src="" alt="" height="200px" width="150px"/>
 -->
</div>


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