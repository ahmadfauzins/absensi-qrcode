     <div class="content">
        <div class="contents">
          <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">people_alt</i>
                                </div>
                                <p class="card-category">Daftar Peserta</p>
                                <h3 class="card-title">
                                 <?php $peserta->result(); echo $peserta->num_rows(); ?>

                                </h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">local_offer</i>
                                  <a href="#pablo">Peserta KU</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">person_add</i>
                                </div>
                                <p class="card-category">Daftar Peserta</p>
                                <h3 class="card-title">
                                  <?php $peserta->result(); echo $peserta->num_rows(); ?>
                                </h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">local_offer</i> Peserta PKKMB
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">timer</i>
                                </div>
                                <p class="card-category">Jumlah</p>
                                <h3 class="card-title">
                                  <?php $absenmasuk->result(); echo $absenmasuk->num_rows(); ?>
                                </h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Absensi Masuk
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">timer_off</i>
                                </div>
                                <p class="card-category">Jumlah</p>
                                <h3 class="card-title">
                                  <?php $absenmasuk->result(); echo $absenmasuk->num_rows(); ?>
                                  
                                </h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> Absensi Pulang
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         </div>
                        </div>

                  <footer class="footer">
                    <div class="container-fluid">
                      <div class="copyright float-right"><br><br><br><br><br><br><br><br><br>
                        &copy;
                        <script>
                          document.write(new Date().getFullYear())
                        </script> made with <i class="material-icons">favorite</i> by
                        <a href="http://www.bemstmikikmi.rf.gd" target="_blank">Ahmad Fauzi & Panitia KU - PKKMB STMIK IKMI  CIREBON.</a>
                      </div>
                    </div>
                  </footer>
      </div>
    </div>
              

       