<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?=BASEURL; ?>/images/logo.svg">
              </div>
              <h4>Mendaftar untuk melanjutkan</h4>
              <h6 class="font-weight-light">Pastikan email & telefon aktif agar bisa digunakan </h6>
              <form class="pt-3" id="register-form" method="POST" action="<?=URLROOT; ?>/registrasi/registrasi">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="" placeholder="Nama" name="nama">
                  <p><?=$data['namaError']; ?></p>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email"
                    name="email">
                  <p><?=$data['emailError']; ?></p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password" name="password">
                  <p><?=$data['passwordError']; ?></p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password" name="konfirmasiPassword">
                  <p><?=$data['konfirmasiPasswordError']; ?></p>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Nomor Telefon" name="nomor" required>
                  <p><?=$data['nomorError']; ?></p>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Dengan mendaftar, saya setuju dengan syarat &
                      ketentuan yang berlaku </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit"
                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">DAFTAR</button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Sudah punya akun? <a href="<?=URLROOT; ?>/registrasi"
                    class="text-primary">Masuk</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=BASEURL; ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?=BASEURL; ?>/js/off-canvas.js"></script>
  <script src="<?=BASEURL; ?>/js/hoverable-collapse.js"></script>
  <script src="<?=BASEURL; ?>/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
