<?php
include "header.php";
include "admin_function.php";
if (isset($_POST['tag_add'])){
    $name = $_POST['name'];
    addTag($name);
    echo '<script>window.location.href = "/php/admin/tag.php";</script>';
    exit;
}
?>
<div class="container">
    <br><br>
    <form method="post">
        <label for="title">
            <input type="text" width="600" required name="name" class="form-control"
                   placeholder="Tag nomini kiriting">
        </label><br>
        <br>
        <button type="submit" name="tag_add" class="btn btn-primary">Save</button>
    </form>
</div>