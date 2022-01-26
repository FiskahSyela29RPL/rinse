<div class="page-header">
  <h3 class="page-title"> Tambah Pelanggan </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=BASEURL ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?=BASEURL ?>/pelanggan">Pelanggan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputUsername1">Nama</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Pelanggan">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Telepon</label>
            <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Nomor" max=12>
          </div>
          <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Tanpa nomor telepon </label>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value=""
                  checked> Perempuan </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value=""
                  checked> Laki-laki </label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleTextarea1" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
