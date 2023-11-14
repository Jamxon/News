<?php
include "header.php";
include "admin_function.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $category = getCategoryById($id);
}
?>
<div class="container">
    <br><br>
    <form action="admin_function.php" method="post">
        <label for="title">
            <input type="text" value="<?=$category->title?>" width="600" required name="title" class="form-control" placeholder="Kategoriya nomini kiriting">
        </label><br>
        <input type="hidden" value="<?=$category->id?>" name="id">
        <br><button type="submit" name="cat_update" class="btn btn-primary">Save</button>
    </form>
</div>