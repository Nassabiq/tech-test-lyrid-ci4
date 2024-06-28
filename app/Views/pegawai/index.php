<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container p-5">
    <div class="d-flex p-3 justify-content-between align-items-center">
        <h2>Manage Pegawai</h2>
        <a href="/pegawai/create" class="btn btn-sm btn-success mb-3">Tambah Data Pegawai</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pegawai as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><img src="/uploads/<?= $item['photo'] ?>" alt="Photo" width="50"></td>
                    <td>
                        <a href="/pegawai/edit/<?= $item['id'] ?>" class="btn btn-primary">Edit</a>
                        <form action="/pegawai/delete/<?= $item['id'] ?>" method="post" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>