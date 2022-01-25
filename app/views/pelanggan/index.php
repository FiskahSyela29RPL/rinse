<div class="page-header">
  <h3 class="page-title"> Transaksi Pelanggan </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=BASEURL ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
    </ol>
  </nav>
</div>
<p class="card-description"> Cari pelanggan untuk melakukan <mark>Transaksi</mark>, klik profile untuk detail.</p>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> No </th>
              <th> User </th>
              <th> Nama </th>
              <th> Saldo </th>
              <th> Order </th>
              <th> Top-Up </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <a href="<?=URLROOT ?>/pelanggan/detil">
                <td> 1 </td>
              </a>
              <td class="py-1">
                <a href="<?=URLROOT ?>/pelanggan/detil">
                  <img src="<?=BASEURL ?>/images/faces-clipart/pic-1.png" alt="image" />
                </a>
              </td>
              <td> Herman Beck </td>
              <td>Rp 0</td>
              <td>
                <a href="<?=URLROOT ?>/pelanggan/order">
                  <button class="badge badge-warning">Order</button>
                </a>
              </td>
              <td>
                <a href="<?=URLROOT ?>/pelanggan/bayar">
                  <button class="badge badge-success">Top-Up</button>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <a href="<?=URLROOT ?>/pelanggan/tambah">
          <button type="button" class="btn btn-danger btn-lg btn-block">
            <i class="mdi mdi-plus"></i> Tambah Pelanggan </button>
        </a>
      </div>
    </div>
  </div>
