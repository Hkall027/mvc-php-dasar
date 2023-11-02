<div class="container mt-4">

    <div class="row">
        <div class="col-md-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <div class="d-flex align-items-baseline mb-3" style="justify-content: space-evenly;">
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data Mahasiswa
                </button>
                <form action="<?= BASEURL; ?>/mahasiswa/search" method="post" class="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit" id="tombolsearch">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-5">
                <div class="mb-2">
                    <h3 class="">Daftar Mahasiswa</h3>
                </div>
                <ul class="list-group">
                    <?php foreach ( $data['mhs'] as $mhs) : ?>
                        <li class="list-group-item ">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-bg-danger float-end ms-1" style="text-decoration: none;" onclick="return confirm('Yakin Anda Ingin Menghapus Data Ini?');">Hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge text-bg-success float-end ms-1 tampilModalEdit" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary float-end ms-1" style="text-decoration: none;">Detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off">
        </div>
        
        <div class="form-group mb-3">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" name="nrp" id="nrp" autocomplete="off">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com">
        </div>

        <div class="form-group mb-3">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
                <!-- <option selected><?= BASEURL; ?></option> -->
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Planologi">Teknik Planologi</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
        </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>