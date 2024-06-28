<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2>Tambah User</h2>
    <?php if (session()->getFlashdata('errors')) : ?>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="/users/store" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?= $this->endSection() ?>