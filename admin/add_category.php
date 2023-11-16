<?php
include "header.php";
include "admin_function.php";
?>
<div class="container">
    <br><br>
    <form action="admin_function.php" method="post">
        <label for="title">
            <input type="text" required name="title" class="form-control" placeholder="Kategoriya nomini kiriting" style="width: 500px !important; background-color: #191C24 !important">
        </label><br>
        <br><button type="submit" name="cat_add" class="btn btn-primary">Save</button>
    </form>
</div>