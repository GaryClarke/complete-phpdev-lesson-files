<?php

use App\Entity\UserRepository;

include 'includes/header.php';

$id = $_REQUEST['id'];

$userRepo = new UserRepository();

$user = $userRepo->findById($id);
$originalSettings = unserialize($user->original_settings);

?>

<main class="container">

    <h3><?= $user->name; ?></h3>

    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Current Settings</th>
            <th scope="col">Original Settings</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Name</th>
            <td><?= $user->name; ?></td>
            <td><?= $originalSettings->name; ?></td>
        </tr>
        <tr>
            <th scope="row">Prod Server Access</th>
            <td><?= $user->prod_server_access; ?></td>
            <td><?= $originalSettings->prod_server_access; ?></td>
        </tr>
        <tr>
            <th scope="row">Prod Data Access</th>
            <td><?= $user->prod_data_access; ?></td>
            <td><?= $originalSettings->prod_data_access; ?></td>
        </tr>
        <tr>
            <th scope="row">Dev Server Access</th>
            <td><?= $user->dev_server_access; ?></td>
            <td><?= $originalSettings->dev_server_access; ?></td>
        </tr>
        <tr>
            <th scope="row">Dev Data Access</th>
            <td><?= $user->dev_data_access; ?></td>
            <td><?= $originalSettings->dev_data_access; ?></td>
        </tr>
        <tr>
            <th scope="row">Test Server Access</th>
            <td><?= $user->test_server_access; ?></td>
            <td><?= $originalSettings->test_server_access; ?></td>
        </tr>
        <tr>
            <th scope="row">Test Data Access</th>
            <td><?= $user->test_data_access; ?></td>
            <td><?= $originalSettings->test_data_access; ?></td>
        </tr>
        </tbody>

    </table>

</main>

