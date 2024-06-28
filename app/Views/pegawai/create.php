<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container p-5">
    <h2>Tambah Pegawai</h2>
    <?php if (session()->getFlashdata('errors')) : ?>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <form action="/pegawai/store" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/jpeg">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?= $this->endSection() ?>