<?php
    require "models/UsersModel.php";
    $allUsers = new Users();
?>

<label for="customer">Choose a customer:</label>
<select name="customer" id="customer">
    <?php foreach ($allUsers->getAllUsers() as $user) { ?>
        <option value=<?= $user->getFirstName() . "_" . $user->getLastName(); ?>>
            <?= ucfirst($user->getFirstName()) . " " . ucfirst($user->getLastName());  ?>
        </option>
    <?php } ?>
</select>