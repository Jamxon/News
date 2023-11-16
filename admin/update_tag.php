<?php
include "header.php";
include "admin_function.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $tag = getTagById($id);
}
?>
<div class="container">
    <br><br>
    <form action="admin_function.php" method="post">
        <label for="title">
            <input type="text" value="<?=$tag->name?>" width="600" required name="name" class="form-control" placeholder="Kategoriya nomini kiriting">
        </label><br>
        <input type="hidden" value="<?=$tag->id?>" name="id">
        <br><button type="submit" name="tag_update" class="btn btn-primary">Save</button>
    </form>
</div>