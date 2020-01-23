<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header  card-header-icon">
                  <a href="" data-toggle="modal" data-target="#tambah"><div class="card-icon card-header-success"><i class="material-icons">person_add</i></div></a>
                  <a href="javascript:print()"><div class="card-icon card-header-info"><i class="material-icons">print</i></div></a>

                  <h4 class="card-title">DATA USER </h4>
                </div>
        
                <div class="card-body" id="content" >
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Level</th>
                          <th>Status</th>
                          <th>Tanggal Update</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (empty($pengguna)) { ?>
                        <tr> 
                          <td colspan="8">Data tidak ditemukan</td> 
                        </tr> 
                      <?php
                        } else {
                        $no = 1;
                          foreach ($pengguna->result() as $tampil) {
                          ?>
                        <tr>
                          <td><div align="center"><?php echo $no++ ?></div></td>
                          <td><div align="center"><?php echo $tampil->nama_lengkap ?></div></td>
                          <td><div align="center"><?php echo $tampil->username ?></div></td>
                          <td><div align="center"><?php echo $tampil->password ?></div></td>
                          <td><div align="center"><?php echo $tampil->level ?></div></td>
                          <td><div align="center"><?php echo $tampil->blokir ?></div></td>
                          <td><div align="center"><?php echo $tampil->tglupdate ?></div></td>
                          <td class="td-actions text-right">
                            <div align="center">
                            <button class="btn btn-success btn-round " rel="tooltip" data-toggle="modal" title="Edit Data <?php echo $tampil->nama_lengkap;?> ?" data-target="#edit<?php echo $tampil->id_user;?>"> 
                            <i class="material-icons">edit</i></button> 
              
                               <a href="<?php echo base_url()?>index.php/user/hapus_peserta/<?php echo $tampil->id_user?>" rel="tooltip" class="btn-danger btn-round" title="Hapus Data <?php echo $tampil->nama_lengkap;?> ?">
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

      

