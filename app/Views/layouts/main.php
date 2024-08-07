<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .nav-link:hover {
            font-weight: bold;
        }

        .navbar-text {
            cursor: pointer;
        }

        .navbar-text:hover {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php if (session()->get('logged_in')) : ?>
        <?= $this->include('layouts/navbar') ?>
    <?php endif; ?>

    <?= $this->renderSection('content') ?>


</body>

</html>