<div class="page-header">
  <h3 class="page-title"> Top-Up Pelanggan </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=URLROOT ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?=URLROOT ?>/pelanggan">Pelanggan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Top-Up</li>

    </ol>
  </nav>
</div>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <form class="forms-sample">
        <div class="form-group">
          <input type="hidden" class="form-control" id="exampleInputName1" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Jumlah (Dalam Rupiah)</label>
          <input type="number" class="form-control" id="exampleInputName1" placeholder="Jumlah">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Metode pembayaran</label>
          <select class="form-control" id="">
            <option value="tunai">Tunai</option>
            <option value="transfer">Transfer</option>
            <option value="emoney">E-money</option>
          </select>
        </div>
        <button type="submit" class="btn btn-gradient-primary mr-2">Konfirmasi</button>
        <a href="<?=URLROOT ?>/pelanggan/">
          <label class="btn btn-gradient-danger mr-2">Batalkan</label>
        </a>
      </form>
    </div>
  </div>
</div>
