<div class="row">
    <di class="col-lg-6">
        <?php Flasher::flash() ?>
    </di>
</div>
<div class="container mt-3">
    <div class="row mb-3">
        <div class="lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row mb-3">
            <div class="lg-6">
                <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
                        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Search</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3>Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><?= $mhs['nama'] ?></div>
                            </div>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-primary rounded-pill ms-1">Detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge bg-success rounded-pill ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge bg-danger rounded-pill ms-1" onclick="return confirm('Yakin?')">Hapus</a></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp >
                    </div>

                    <div class=" mb-3">
                            <label for="nobp" class="form-label">NoBP</label>
                            <input type="number" class="form-control" id="nobp" name="nobp" aria-describedby="emailHelp>
                    </div>

                    <div class=" mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp>
                    </div>

                    <div class=" form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>