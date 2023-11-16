<?php

include "header.php";
include "admin_function.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = getCategoryById($id);
}
?>
<div class="container">
    <br><br>
    <form action="admin_function.php" method="post" enctype="multipart/form-data">
        <table class="table table-striped">
            <a href="/php/admin/add_post.php" class="btn btn-primary">Yangilik qo'shish</a>
            <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category</th>
            </tr>
            </thead>
            <tbody class="text-body-light">
                <?php
                $id = $_GET['id'];
                $new = getNewsById($id);
                ?>
            <tr>
                <td><input type="hidden"  name="id" value="<?=$new->id?>"></td>
                <td><input type="text"  name="title" value="<?php echo $new->title?>"></td>
                <td><textarea name="content" id="" cols="30" rows="10"><?php echo $new->content?></textarea></td>
                <td><select name="category_id" id="">
                        <?php
                        $category = getCategory(1,true);
                        foreach ($category as $cat){
                            ?>
                            <option value="<?=$cat->id?>"><?=$cat->title?></option>
                        <?php
                        }
                        ?>
                    </select></td></tr>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Author</th>
                    <th scope="col">Visited</th>
                    <th scope="col">Created at</th>
                </tr>

                <tr>
                <td>
                        <img src="../images/<?php echo $new->image?>" width="200px" alt="">
                </td>
                <td>
                        <?php
                        $category = getAuthor(1);
                            ?>
                    <input type="hidden" name="author_id" value="<?=$new->author_id?>">
                            <h5><?=$category->firstname?></h5>
                    </td>
                <td><?php echo $new->visited_count?></td>
                <td><?php echo $new->created_at?></td>
            </tr>
                <tr>
                    <th>
                        <input type="file" name="image" id="">
                    </th>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="submit" name="news_update" class="btn btn-primary">Save</button>
    </form>
</div>