<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container w-100 h-100">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <h2>Login</h2>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form action="/auth/loginProcess" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>