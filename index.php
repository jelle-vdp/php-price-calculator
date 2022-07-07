<?php

    require "models/AllUsersModel.php";

    $allUsers = new AllUsers();
    
?>

<form method="POST">
<label for="customer">Choose a customer:</label>
  <select name="customer" id="customer">
        <?php foreach ($allUsers->getAllUsers() as $user) { ?>
            <option value=<?= $user['firstname'] . "_" . $user['lastname']; ?>>
                <?= $user['firstname'] . " " . $user['lastname']; ?>
            </option>
        <?php } ?>
  </select>
  <button type="submit">Submit</button>
</form>