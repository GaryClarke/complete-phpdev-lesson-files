<?php

use App\Entity\UserRepository;

include 'includes/header.php';

$userCreated = false;

// Create a user in the DB using the POST data if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Save user to db
    $userRepo = new UserRepository();

    $userCreated = $userRepo->save($_POST);
}

?>

<main class="container">

    <?php if ($userCreated): ?>

        <div class="alert alert-success" role="alert">
            The user has been created!
        </div>

    <?php else: ?>

        <form method="post">

            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"
                           name="prod-server-access" id="prod-server-access">
                    <label class="form-check-label" for="prod-server-access">
                        Production Server Access
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"
                           id="prod_data_access" name="prod_data_access">
                    <label class="form-check-label" for="prod_data_access">
                        Production Data Access
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"
                           id="dev_server_access" name="dev_server_access">
                    <label class="form-check-label" for="dev_server_access">
                        Dev Server Access
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"
                           id="dev_data_access" name="dev_data_access">
                    <label class="form-check-label" for="dev_data_access">
                        Dev Data Access
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"
                           id="test_server_access" name="test_server_access">
                    <label class="form-check-label" for="test_server_access">
                        Test Server Access
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1"
                           id="test_data_access" name="test_data_access">
                    <label class="form-check-label" for="test_data_access">
                        Test Data Access
                    </label>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </form>

    <?php endif; ?>

</main>

</body>
</html>
