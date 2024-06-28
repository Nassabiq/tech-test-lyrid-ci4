<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container p-5">
    <div class="d-flex p-3 justify-content-between align-items-center">
        <h2>Manage Users</h2>
        <a href="/users/create" class="btn btn-success mb-3">Create New User</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td>
                        <a href="/users/edit/<?= $user['id'] ?>" class="btn btn-primary">Edit</a>
                        <form action="/users/delete/<?= $user['id'] ?>" method="post" style="display:inline;">
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