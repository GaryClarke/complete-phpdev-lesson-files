<?php

use App\Models\UserRepository;

require_once '../vendor/autoload.php';

$userRepo = new UserRepository();

$users = $userRepo->findAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
<div class="container" style="margin-top: 50px">

    <?php if (count($users) < 1): ?>

        <div class="alert alert-warning">
            No users were found.
        </div>

    <?php endif; ?>

    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">User Local Time</th>
            <th scope="col">Account Age</th>
            <th scope="col">Account Active?</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($users as $user): ?>
            <tr>
                <th scope="row"><?= $user->id ?></th>
                <td><?= $user->name ?></td>
                <td><?= $user->getLocalTime() ?></td>
                <!-- show account age in y m format as shown -->
                <!-- create an accountAge() method on User -->
                <td><?= $user->accountAge()->y . 'y ' . $user->accountAge()->m . 'm' ?></td>
                <td><?= $user->isActive() ? 'Yes' : 'No' ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
