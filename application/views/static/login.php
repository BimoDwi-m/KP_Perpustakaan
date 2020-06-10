
<!-- Our Website Content Goes Here -->
<div class="account-user-sec">
     <div class="account-sec">
                   <div class="row">
                       <?php
                            if (isset($_GET['a'])) {
                                $alert=$_GET['a'];
                                if ($alert=='login_required') {
                       ?>
                       <div class="col-md-6 col-md-offset-3">
                            <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Maaf!</strong> Anda harus login terlebih dahulu untuk mengakses halaman Admin.
                            </div>
                        </div>
                        <?php
                            } else if ($alert=='gagal_login') {
                        ?>
                        <div class="col-md-6 col-md-offset-3">
                            <div role="alert" class="alert color red-bg fade in alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <strong>Login gagal!</strong> Username atau password yang Anda masukkan salah.
                            </div>
                        </div>
                        <?php } } ?>
                   </div>
          <div class="acount-sec">
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <div class="account-detail">
                                   <ul>
                                        <li>
                                             <h4><b><i class="fa  fa-television"></i> Login untuk fitur Administrasi MyLibrary</h4>
                                             <p align="justify">Dengan melakukan login menggunakan akun administrator
                                                Anda dapat menggunakan fitur CRUD berkaitan dengan administrasi buku dan konten website <strong>MyLibrary.</strong>
                                             </p>
                                        </li>
                                        <li>
                                             <h4><b><i class="fa fa-map-o"></i> Butuh bantuan?</h4>
                                             <p align="justify">Anda butuh bantuan? Silakan hubungi admin melalui kontak yang tersedia di
                                                 halaman utama web.<br>
                                             </p>
                                        </li>
                                        <li>
                                             <br><h4><b><i class="fa  fa-send-o"></i> Sederhana, Elegan & Super Cepat</h4>
                                             <p align="justify">Website kami menyediakan interface yang sederhana, elegan, dan cepat untuk menangani kebutuhan pengguna</p>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         <br>
                         <div class="col-md-8">
                              <div class="contact-sec">
                                   <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                             <div class="widget-title">
                                                  <h3><b>Spen4-Library | Administrator</b></h3>
                                                  <span>Isikan data Anda untuk masuk ke halaman Admin</span>
                                             </div><!-- Widget title -->
                                             <div class="account-form">
                                                  <form method="post">
                                                       <div class="row">
                                                            <div class="feild col-md-12">
                                                                 <input type="text" name="username" placeholder="Username" />
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="password" name="password" placeholder="Password" />
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="submit" value="Login Sekarang" />
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <footer>
              <div class="container">
                <span class="footer-line"><strong>&copy; 2020</strong> Perpustakaan SMP Negeri 4 Lumajang</span>
              </div>
          </footer>
     </div><!-- Account Sec -->
</div>