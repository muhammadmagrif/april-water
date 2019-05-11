
    <div class="container-fluid">
      <div class="container">
        <h3>DATA PENGIRIMAN</h3>
        <hr>
        <div class="wrap">
        <form action="/action_page.php">
          <div class="form-group">
            <label for="nama">Nama Penerima:</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Penerima:</label>
            <textarea class="form-control" rows="3" id="alamat" required></textarea >
          </div>
          <div class="form-group">
            <label for="phone">Nomor Telepon:</label>
            <input type="text" class="form-control" id="phone" required>
          </div>
          <div class="form-group">
            <label for="sel1">Nama Pemesan:</label>
            <select class="form-control" id="sel1">
              <option value="" disabled selected>Pilih Pemesanan</option>
              <option value="1">Fauzan</option>
              <option value="2">Rahman</option>
              <option value="3">Yafi</option>
              <option value="4">Malik</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sel1">Pemesanan:</label>
            <select class="form-control" id="sel1">
              <option value="" disabled selected>Pilih Pemesanan</option>
              <option value="1">0024525</option>
              <option value="2">002425</option>
              <option value="3">0025674</option>
              <option value="4">0025665</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sel1">Kurir:</label>
            <select class="form-control" id="sel1">
              <option value="" disabled selected>Pilih Pemesanan</option>
              <option value="1">Magrif Putra</option>
              <option value="2">Zulfikar</option>
              <option value="3">Rico</option>
              <option value="4">Galih</option>
            </select>
          </div>
          <div style="padding-bottom: 40px; margin-top: 50px">
            <button style="float: right" value="Click Me" type="submit" class="btn btn-default btn-lg">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>
