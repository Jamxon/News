<?php
include "header.php";
include "admin_function.php";
?>
<div class="container">
    <br><br>
    <form action="admin_function.php" method="post">
        <label for="title">
            <input type="text" width="600" required name="title" class="form-control" placeholder="Title ni kiriting">
        </label><br>
        <label for="content">
            <textarea class="form-control" name="content" id="content_id" cols="30" rows="10">
                
            </textarea>
        </label><br><label for="category_id">
            <select class="form-control" name="category_id" id="">
                <option value=""></option>
            </select>
        </label><br><label for="author_id">
            <select name="author_id" id="" class="form-control">
                <option value=""></option>
            </select>
        </label><br><label for="image">
            <input type="file" width="600" required name="image" class="form-control">
        </label><br>
        <br><button type="submit" name="cat_add" class="btn btn-primary">Save</button>
    </form>
</div>