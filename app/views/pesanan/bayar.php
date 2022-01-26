<div class="page-header">
  <h3 class="page-title"> Detail Konfirmasi Pesanan </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=URLROOT ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?=URLROOT ?>/pesanan">Pesanan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Bayar</li>
    </ol>
  </nav>
</div>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h3 class="text-primary">ID Transaksi:</h3>
      <h4 class="text-primary"></h4>
      <a class="card-description" href="<?=URLROOT ?>/pelanggan/detil">
        Saturniesm, at 27 Juli 2009; 10:00
      </a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th> No </th>
            <th> Paket </th>
            <th> Jumlah (Kg)</th>
            <th> Harga / Kg</th>
            <th> Total </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Selimut</td>
            <td>4</td>
            <td>Rp 4000</td>
            <td>Rp 16000</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Selimut</td>
            <td>4</td>
            <td>Rp 4000</td>
            <td>Rp 16000</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Selimut</td>
            <td>4</td>
            <td>Rp 4000</td>
            <td>Rp 16000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h3 class="text-primary">Total</h3>
      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputEmail1">Jenis Pembayaran</label>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value=""
                checked> Tunai </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value=""
                checked> E-wallet </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value=""
                checked> Saldo </label>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Jumlah Bayar</label>
          <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Nomor" max=12>
        </div>
        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
</tbody>
</table>
</div>
</div>
