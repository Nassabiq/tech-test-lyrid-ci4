<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container p-5">
    <h2>Edit Pegawai</h2>
    <?php if (session()->getFlashdata('errors')) : ?>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <form action="/pegawai/update/<?= $employee['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $employee['nama'] ?>">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/jpeg">
            <p>Current Photo: <img src="/uploads/<?= $employee['photo'] ?>" alt="Photo" width="50"></p>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection() ?>