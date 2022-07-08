<?php
    require "models/UsersModel.php";
    $allUsers = new Users();
?>

<form method="POST">
    <label class="label" for="customer">Choose a customer:</label>
    <div class="select mb-4">
        <select name="customer" id="customer">
            <?php foreach ($allUsers->getAllUsers() as $user) { ?>
                <option value=<?= $user->getFirstName() . "_" . $user->getLastName(); ?>>
                    <?= ucfirst($user->getFirstName()) . " " . ucfirst($user->getLastName());  ?>
                </option>
            <?php } ?>
        </select>
    </div>
