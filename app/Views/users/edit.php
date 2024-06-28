<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container p-5">
    <h2>Edit User</h2>
    <?php if (session()->getFlashdata('errors')) : ?>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <form action="/users/update/<?= $user['id'] ?>" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (leave blank to keep current password)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection() ?>