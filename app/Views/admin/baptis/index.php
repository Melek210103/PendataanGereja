<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="pagetitle">
    <h1>Data Baptis</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Data Baptis</li>
        </ol>
    </nav>
</div>

<div class="col-lg-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Baptis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($baptis as $key => $value): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nama']; ?></td>
                            <td><?= $value['tanggal_baptis']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm" title="Ubah">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('baptis/hapus/' . $value['id_baptis']); ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
