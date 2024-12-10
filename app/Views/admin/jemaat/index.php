<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="pagetitle">
    <h1><?= $judul; ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul; ?></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><?= $subjudul; ?></h5>
                        <a href="<?= base_url('jemaat/tambah'); ?>" class="btn btn-primary">Tambah</a>
                    </div>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Unsur</th>
                                    <th>Status Keanggotaan</th>
                                    <th>Aksi</th> <!-- Kolom untuk aksi -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($jemaat as $key => $value): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['nama_unsur']; ?></td>
                                        <td><?= $value['status_keanggotaan']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm" title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
