<?php
if ($this->session->flashdata('alert')=='berhasil_data'){
    echo "<script>alert('Data pengiriman berhasil ditambahkan');</script>";
} elseif ($this->session->flashdata('alert')=='gagal_data') {
  echo "<script>alert('Data pengiriman gagal ditambahkan');</script>";
} elseif ($this->session->flashdata('alert')=='hapus_berhasil') {
  echo "<script>alert('Data pengiriman berhasil dihapus');</script>";
} elseif ($this->session->flashdata('alert')=='hapus_gagal') {
  echo "<script>alert('Data pengiriman gagal dihapus');</script>";
}
?>

<div class="container-fluid">
  <div class="container">
    <h3>DAFTAR PENGIRIMAN</h3>
    <hr>
    <div class="wrap">
    <!-- <form method="post" action="distribusi/store" id="signupform" class="form-horizontal" role="form"> -->
    <?=form_open($action, ['class' => 'form-horizontal', 'role' => 'form']);?>
    <div class="form-group">
      <input type="hidden" class="form-control" name="id" value="<?= isset($data->kode_pengiriman) ? $data->kode_pengiriman : ''  ?>">
    </div>
      <div class="form-group">
        <label for="nama">Nama Penerima:</label>
        <input type="text" class="form-control" name="nama" value="<?= isset($data->nama_penerima) ? $data->nama_penerima : ''  ?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Penerima:</label>
        <textarea class="form-control" rows="3" name="alamat" required><?= isset($data->alamat_penerima) ? $data->alamat_penerima : ''  ?></textarea>
      </div>
      <div class="form-group">
        <label for="phone">Nomor Telepon:</label>
        <input type="text" class="form-control" name="telepon" value="<?= isset($data->telepon_penerima) ? $data->telepon_penerima : ''  ?>" required>
      </div>

      <!-- Form group ini harus terhubung sama table pemesanan diambil dari nama pemesannya -->
      <div class="form-group">
        <label for="sel1">Nama Pemesan:</label>
        <select class="form-control" id="sel1" name="nama_pemesan">
          <option value="" disabled selected>Pilih Pemesanan</option>
          <option value="Fauzan" <?php if(isset($data->nama_pemesan) && $data->nama_pemesan == 'Fauzan'){ echo 'selected'; } ?>>Fauzan</option>
          <option value="Rahman" <?php if(isset($data->nama_pemesan) && $data->nama_pemesan == 'Rahman'){ echo 'selected'; } ?>>Rahman</option>
        </select>
      </div>

      <!-- Form group ini harus terhubung sama table pemesanan diambil dari id pemesannannya yang belum selesai transaksinya -->
      <div class="form-group">
        <label for="sel1">Pemesanan:</label>
        <select class="form-control" id="sel1" name="pemesanan">
          <option value="" disabled selected>Pilih Pemesanan</option>
          <option value="0024525" <?php if(isset($data->pemesanan) && $data->pemesanan == '0024525'){ echo 'selected'; } ?>>0024525</option>
          <option value="002425" <?php if(isset($data->pemesanan) && $data->pemesanan == '002425'){ echo 'selected'; } ?>>002425</option>
        </select>
      </div>

      <!-- Form group ini harus terhubung sama table karyawan, diambil dari orang yang jadi kurir -->
      <div class="form-group">
        <label for="sel1">Kurir:</label>
        <select class="form-control" id="sel1" name="kurir">
          <option value="" disabled selected>Pilih Pemesanan</option>
          <option value="Rico" <?php if(isset($data->kurir) && $data->kurir == 'Rico'){ echo 'selected'; } ?>>Rico</option>
          <option value="Galih" <?php if(isset($data->kurir) && $data->kurir == 'Galih'){ echo 'selected'; } ?>>Galih</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sel1">Status:</label>
        <select class="form-control" id="sel1" name="status">
          <option value="Belum Dikirim" <?php if(isset($data->status) && $data->status =='Belum Dikirim'){ echo 'selected'; } ?>>Belum Dikirim</option>
          <option value="Sudah Dikirim" <?php if(isset($data->status) && $data->status =='Sudah Dikirim'){ echo 'selected'; } ?>>Sudah Dikirim</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sel1">Tanggal kirim:</label>
        <input type="date" name="tanggal_kirim" class="form-control" value="<?php if(isset($data->tanggal_kirim)){ echo date('Y-m-d', strtotime($data->tanggal_kirim));}?>">
      </div>
      <div style="padding-bottom: 40px; margin-top: 50px">
        <button style="float: right" value="Click Me" type="submit" class="btn btn-default btn-lg">Submit</button>
      </div>
    <?=form_close();?>
    </div>
  </div>
</div>
