<?php
if (isset($_SESSION['login']) != "valid"){
    header("Location: ../admin");
}
?>

<div class="adminBtns">
    <form method="post">
        <button type="submit" class="btn btn-outline-dark rounded-0" name="adminBtn" value='add'>Add</button>
        <button type="submit" class="btn btn-outline-dark rounded-0" name="adminBtn" value='edit'>Edit</button>
        <button type="submit" class="btn btn-outline-dark rounded-0" name="adminBtn" value='orders'>Orders</button>
    </form>
</div>

<?php

if ($adminBtn == "add"){
    include "./addForm.php";
} else if ($adminBtn == "add"){
    include "./editForm.php";
} else if ($adminBtn == "add"){
    include "orders.php";
}




?>