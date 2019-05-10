<!-- Content dimulai dari sini -->
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <h3>DATA PENGIRIMAN</h3>
      <hr>
      <div class="col-12">
        <?php
        if ($this->session->flashdata('alert-success')){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $this->session->flashdata('alert-success');
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
              echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
          echo '</div>';
        }
        if ($this->session->flashdata('alert-failed')){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            echo $this->session->flashdata('alert-failed');
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
              echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
          echo '</div>';
        }
        ?>
      </div>
      <div class="col-12">
        <a href="<?=base_url('distribusi/add')?>" type="button" class="btn btn-primary"  name="daftar"><i class="fas fa-plus-square"></i> Tambah Pengiriman</a>
      </div>
      <table class="table table-striped table-hover text-center">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Pengiriman</th>
            <th>Nama Penerima</th>
            <th>Alamat Penerima</th>
            <th>Nomor Handphone</th>
            <th>Nama Pemesan</th>
            <th>Pemesanan</th>
            <th>Kurir</th>
            <th>Status</th>
            <th>Tanggal Dikirim</th>
            <th>. . .</th>
          </tr>
        </thead>
        <tbody>
          <?php $counter = 1; ?>
          <?php foreach ($pengiriman as $data) {
            $date = date('d-m-Y', strtotime($data['tanggal_kirim']));
          ?>
            <tr>
              <td><center><?= $counter;?></td>
              <td><center><?= $data['kode_pengiriman'];?></td>
              <td><center><?= $data['nama_penerima'];?></td>
              <td><center><?= $data['alamat_penerima'];?></td>
              <td><center><?= $data['telepon_penerima'];?></td>
              <td><center><?= $data['nama_pemesan'];?></td>
              <td><center><?= $data['pemesanan'];?></td>
              <td><center><?= $data['kurir'];?></td>
              <td class="<?= ($data['status'] == 'Sudah Dikirim' ? 'bg-success' : 'bg-danger')  ?>"><center><?= $data['status'];?></td>
              <td><center><?= $date ?></td>
              <td style="text-align: center;">
              <?php if($data['status'] == 'Belum Dikirim') { ?>
                <a href="" data-target="#done_<?= $data['kode_pengiriman'] ?>" data-original-title="Done this data" data-toggle="modal" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
              <?php } ?>
              <a href="<?=base_url('distribusi/edit/').$data['kode_pengiriman']?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
              <a href="" data-target="#delete_<?= $data['kode_pengiriman'] ?>" data-original-title="Remove this data" data-toggle="modal" type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
              </td>
              <div id="done_<?= $data['kode_pengiriman']; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5 class="modal-title">Anda yakin transaksi data ini sudah dikirim??</h5>
                      <?= form_open("distribusi/dikirim"); ?>
                      <input type="hidden" name="id" class="form-control" value="<?= $data['kode_pengiriman'];?>" required>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" name="selesai" value="Selesai">
                      <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                    </div>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>

              <div id="delete_<?= $data['kode_pengiriman']; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5 class="modal-title">Anda yakin ingin menghapus data pengiriman ini?</h5>
                      <?= form_open("distribusi/delete"); ?>
                      <input type="hidden" name="id" class="form-control" value="<?= $data['kode_pengiriman'];?>" required>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                      <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                    </div>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>
            </tr>
          <?php $counter++; } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
