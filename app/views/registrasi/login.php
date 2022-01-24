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
              <h4>Masuk untuk melanjutkan</h4>
              <form class="pt-3">
                <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Pemilik</option>
                    <option>Admin</option>
                    <option>Produksi</option>
                    <option>Kurir</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type=2 pattern=”^\d{10}$” class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Nomor Telefon" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                    href="">MASUK</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Ingat saya </label>
                  </div>
                  <a href="#" class="auth-link text-black">Lupa password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-google auth-form-btn">
                    <i class="mdi mdi-google mr-2"></i>Masuk dengan google </button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Belum punya akun? <a
                    href="<?=URLROOT; ?>/registrasi/registrasi" class="text-primary">Daftar sekarang</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?=BASEURL; ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=BASEURL; ?>/js/off-canvas.js"></script>
  <script src="<?=BASEURL; ?>/js/hoverable-collapse.js"></script>
  <script src="<?=BASEURL; ?>/js/misc.js"></script>
</body>

</html>
