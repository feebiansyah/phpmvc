<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning tombolTambahData" data-bs-toggle="modal"
        data-bs-target="#formModal">
        Tambah Data Siswa
      </button>
      <br><br>
      <h3>Daftar Siswa</h3>

      <ul class="list-group">
        <?php foreach ($data["siswa"] as $siswa): ?>

        <li class="list-group-item">
          <?= $siswa["nama"] ?>

          <a href="<?= BASEURL ?>/siswa/hapus/<?= $siswa["id"] ?>"class="badge
            text-bg-danger text-decoration-none float-end ms-1" onclick="return
            confirm('yakin?');">hapus</a>

          <a href="<?= BASEURL ?>/siswa/ubah/<?= $siswa["id"] ?>"class="badge
            text-bg-success text-decoration-none float-end ms-1 tampilModalUbah" data-bs-toggle="modal"
            data-bs-target="#formModal" data-id="<?= $siswa["id"] ?>">ubah</a>

          <a href="<?= BASEURL ?>/siswa/detail/<?= $siswa["id"] ?>"class="badge
            text-bg-warning text-decoration-none float-end ms-1">detail</a>
        </li>

        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1"
  aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL ?>/siswa/tambah" method="post">
          <input type="hidden" name="id" id="id">

          <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="form-group">
            <label for="nis">NIS :</label>
            <input type="number" class="form-control" id="nis" name="nis" required>
          </div>

          <div class="form-group">
            <label for="kelas">Kelas :</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
          </div>

          <div class="form-group">
            <label for="jurusan">Pilih Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan" required>
              <option value="Pengembangan Perangkat Lunak Dan Gim">Pengembangan
                Perangkat Lunak Dan Gim</option>
              <option value="Teknik Otomotif">Teknik Otomotif</option>
              <option value="Teknik Ketenagalistrikan">Teknik
                Ketenagalistrikan</option>
              <option value="Busana">Busana</option>
              <option value="Agribisnis Perikanan">Agribisnis Perikanan</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>