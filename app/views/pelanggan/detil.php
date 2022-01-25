<div class="page-header">
  <h3 class="page-title"> Detail Pelanggan, Herman Beck</h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=BASEURL ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?=BASEURL ?>">Pelanggan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Pelanggan</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-md-6 stretch-card grid-margin">
    <div class="card bg-danger card-img-holder text-white">
      <div class="card-body">
        <img src="<?=BASEURL; ?>/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-2">Saldo <i class="mdi mdi-cash-usd mdi-36px float-right"></i>
        </h4>
        <h6 class="card-text mb-4">Total saldo yang tersedia di outlet</h6>
        <h2 class="mb-2">$ 15,0000</h2>
      </div>
    </div>
  </div>
  <div class="col-md-6 stretch-card grid-margin">
    <div class="card bg-danger card-img-holder text-white">
      <div class="card-body">
        <img src="<?=BASEURL; ?>/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-2">Hutang <i class="mdi mdi-currency-usd mdi-36px float-right"></i>
        </h4>
        <h6 class="card-text mb-4">Total hutang (belum membayar tagihan) yang tercatat di outlet</h6>
        <h2 class="mb-2">$ 15,0000</h2>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Pelanggan</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> No </th>
              <th> User </th>
              <th> Nama </th>
              <th> Status </th>
              <th> Alamat </th>
              <th> Email </th>
              <th> Telepon </th>
              <th> Jenis Kelamin </th>
              <th> Top-Up </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> 1 </td>
              <td class="py-1">
                <img src="<?=BASEURL ?>/images/faces-clipart/pic-1.png" alt="image" />
              </td>
              <td> Herman Beck </td>
              <td><label class="badge badge-danger">Baru</label></td>
              <td>Jl. Sepertinya ikan</td>
              <td>saturniesm@gmail.com</td>
              <td>082225233</td>
              <td>
                <label class="badge badge-success">Perempuan</label>
              </td>
              <td>
                <a href="<?=URLROOT ?>/pelanggan/bayar">
                  <button class="badge badge-warning">Top-Up</button>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <a href="<?=URLROOT ?>/pelanggan/order">
          <button type="button" class="btn btn-danger btn-lg btn-block">
            <i class="mdi mdi-plus"></i> Transaksi </button>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Transaksi</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> No </th>
              <th> User </th>
              <th> Nama </th>
              <th> Status </th>
              <th> Alamat </th>
              <th> Email </th>
              <th> Telepon </th>
              <th> Jenis Kelamin </th>
              <th> Top-Up </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> 1 </td>
              <td class="py-1">
                <img src="<?=BASEURL ?>/images/faces-clipart/pic-1.png" alt="image" />
              </td>
              <td> Herman Beck </td>
              <td><label class="badge badge-danger">Baru</label></td>
              <td>Jl. Sepertinya ikan</td>
              <td>saturniesm@gmail.com</td>
              <td>082225233</td>
              <td>
                <label class="badge badge-success">Perempuan</label>
              </td>
              <td>
                <a href="<?=URLROOT ?>/pelanggan/bayar">
                  <button class="badge badge-warning">Top-Up</button>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
