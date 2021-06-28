<?php

use App\Models\UserRepository;

require_once './../vendor/autoload.php';

$user = null;

if ($id = $_GET['id'] ?? false) {

    $repo = new UserRepository();
    $user = $repo->findById($id);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show a user</title>
</head>
<body>
<div class="container" style="margin-top: 50px">
    <?php if ($user): ?>

    <h3><?= "Name: {$user->getName()}, Email: {$user->getEmail()}"; ?></h3>

    <?php else: ?>

    <h3>Sorry...a user could not be found.</h3>

    <?php endif; ?>
</div>
</body>
</html>













