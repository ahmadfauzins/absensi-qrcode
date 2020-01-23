<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header  card-header-icon">
                  <a href="" data-toggle="modal" data-target="#tambah"><div class="card-icon card-header-success"><i class="material-icons">person_add</i></div></a>
                  <a href="javascript:print()"><div class="card-icon card-header-info"><i class="material-icons">print</i></div></a>

                  <h4 class="card-title">DATA MENTOR PKKMB IKMI 2019</h4>
                </div>
        
                <div class="card-body" id="content" >
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <!-- <th>ID MENTOR</th> -->
                          <th>NAMA</th>
                          <th>GUGUS MENTOR</th>
                          <th>FOTO</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php if (empty($mentor)) { ?>
                        <tr> 
                          <td colspan="8">Data tidak ditemukan</td> 
                        </tr> 
                      <?php
                        } else {
                        $no = 1;
                          foreach ($mentor->result() as $tampil) {
                          ?>
                        <tr  align="center" style="padding-left: 20px;">
                          <td><?php echo $no++ ?></div></td>
                          <!-- <td><div align="center"><?php echo $tampil->id_mentor ?></div></td> -->
                          <td><?php echo $tampil->nama ?></div></td>
                          <td><?php echo $tampil->kelompok ?></div></td>                          
                        <!--   <td><div align="center"><?php echo $tampil->foto ?></div></td> -->
                         <td><a href="<?php echo base_url().'assets/mentor/'.$tampil->foto ?>" target="_blank">
                        <img class="img-thumbnail" src="<?php echo base_url().'assets/mentor/'.$tampil->foto?>"  width="70" height="80" title="<?php echo $tampil->foto ?>"> </a>
                          </td>

                           <td class="td-actions ">
                            <div align="center">
                            <button class="btn btn-success btn-round " rel="tooltip" data-toggle="modal" title="Edit Data <?php echo $tampil->nama;?> ?" data-target="#edit<?php echo $tampil->id_mentor;?>"> 
                            <i class="material-icons">edit</i></button>
                               <a href="<?php echo base_url()?>index.php/mentor/hapus_mentor/<?php echo $tampil->id_mentor?>" rel="tooltip" class="btn-danger btn-round" title="Hapus Data <?php echo $tampil->nama;?> ?">
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
    <input class="form-control" name="T0" id="T0" readonly />
    <!-- <p class="help-block">Contoh : MKT-0001, MKT-0002, dll.</p> -->
</div>
<div>
  <label>NAMA MENTOR</label>
    <input class="form-control" name="T1" id="T1"  required />
    <!-- <p class="help-block">Contoh : BUDI DOR, BAMBANG M, dll.</p> -->
</div>
<div>
  <label>GUGUS/KELOMPOK</label>
  <!-- "<option value=\"".$data['id_tipe']."\">".$data['nama_tipe']. "</option> -->
 <!--    <input class="form-control" name="T4" id="T4" placeholder="Ketikkan Keterangan" 
  required></input> -->
  <select class="form-control" name="T4" id="T4" required />
    <option value="Big Data">Big Data</option>
    <option value="Programmer">Programmer</option>
    <option value="Developer">Developer</option>
    <option value="Data Science">Data Science</option>
    <option value="Animator">Animator</option>
    <option value="Robotics">Robotics</option>
    <option value="IoT Internet of Things">IoT Internet of Things</option>
    <option value="AI Artificial Intelligent">AI Artificial Intelligent</option>
  </select>
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
  <button type="submit" class="btn btn-primary">SIMPAN DATA MENTOR</button>
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
  foreach($mentor->result_array() as $tampil):
    $id_mentor =$tampil['id_mentor'];
    $nama=$tampil['nama'];
    $kelompok=$tampil['kelompok'];
    $foto=$tampil['foto'];
?>
<div class="modal fade" id="edit<?php echo $id_mentor;?>" tabindex="1" 
role="dialog" aria-labelledby="largeModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<!-- -->
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>&nbsp;FORM UBAH DATA MENTOR 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close [x]
</button></div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/mentor/update_mentor'?>" 
method="post" enctype="multipart/form-data" autocomplete="on"/>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" 
  value="<?php echo $foto; ?>"/>
</div>
<div class="form-group">
  <label>ID MENTOR</label>
    <input class="form-control" name="T0" id="T0" readonly/>
    <!-- <p class="help-block">Contoh : MKT-0001, MKT-0002, dll.</p> -->
</div>
<div>
  <label>NAMA MENTOR</label>
    <input class="form-control" name="T1" id="T1" value="<?php echo $nama;?>"
  required />
    <!-- <p class="help-block">Contoh : BUDI DOR, BAMBANG M, dll.</p> -->
</div>
<div>
  <label>GUGUS / KELOMPOK</label>
  <select name="T4" id="T4" class="form-control" required>
    <option value="Big Data">Big Data</option>
    <option value="Programmer">Programmer</option>
    <option value="Developer">Developer</option>
    <option value="Data Science">Data Science</option>
    <option value="Animator">Animator</option>
    <option value="Robotics">Robotics</option>
    <option value="IoT Internet of Things">IoT Internet of Things</option>
    <option value="AI Artificial Intelligent">AI Artificial Intelligent</option>
  </select>
    <!-- <p class="help-block">Contoh : KELOMPOK ...</p> -->

</div>
<label>FOTO</label>
<div class="form-group">
  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img id="preview"  src="<?php echo base_url().'assets/mentor/'.$foto ?>" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="F1" id="F1" onchange="tampilkanPreview(this,'preview')" required/>
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
    <!-- <input type="file" name="F1" id="F1" onchange="tampilkanPreview(this,'preview')" /> -->
    
  <p class="help-block">*Foto Boleh Dikosongkan Jika Tidak Diubah</p>
  <!-- <img id="preview" src="" alt="" height="200px" width="150px"/> -->
  <!-- <img src="<?php echo base_url().'assets/mentor/'.$foto ?>" width="60" height="80"> -->
</div>

<div class="form-group" class="modal-footer">
  <button type="submit" class="btn btn-primary">UPDATE DATA MENTOR</button>
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