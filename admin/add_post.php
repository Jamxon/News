<?php
include "header.php";
include "admin_function.php";
$getcategory = getCategory(1, true);
$gettag = getTag(1, true);
if (isset($_POST['add_post'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    $author_id = $_POST['author_id'];
    $image = $_FILES['image']['name'];
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);
    $category_id = htmlspecialchars($category_id);
    $author_id = htmlspecialchars($author_id);
    $image = htmlspecialchars($image);
    if (isset($_POST['tag'])) {
        $tag = $_POST['tag'];
    }else{
        $tag = [];
    }
    addPost($title, $content, $category_id, $author_id, $tag);
    echo '<script>window.location.href = "/php/admin/news.php";</script>';
    exit;
}
?>
<div class="container">
    <br>
    <h2>Post qo'shish</h2>
    <br>
    <form method="post" enctype="multipart/form-data">
        <h5>Title</h5>
        <label for="title">
            <input type="text" width="600" required name="title" class="form-control" placeholder="Title ni kiriting">
        </label><br><br>
        <h5>Content</h5>
        <label for="content">
            <textarea class="form-control" name="content" id="content" cols="30" rows="10">
                
            </textarea>
        </label><br>
        <br><label for="category_id">
            <h5>Category</h5>
            <select class="form-control" name="category_id" id="">
                <option value="">---</option>
                <?php
                foreach ($getcategory as $category)
                {
                    ?>
                    <option value="<?php echo $category->id ?>"><?php echo $category->title ?></option>
                    <?php
                }
                ?>
            </select><br>
        </label><br><label for="author_id">
            <h5>Author</h5>
            <select name="author_id" id="author_id" class="form-control">
                <option value="1">---</option>
                <?php
                $authors = getAuthor(2, true);
                var_dump($authors);
                    foreach ($authors as $author){
                    ?>
                    <option value="<?=$author->id?>"><?=$author->firstname?></option>
                    <?php
                    }
                ?>
            </select>
            <h5>Tag</h5>
            <select name="tag[]" class="form-control" multiple aria-label="multiple select example">
            <?php
                foreach ($gettag as $tag){
                    ?>
                    <option value="<?=$tag->id?>"><?=$tag->name?></option>
                    <?php
                }
            ?>
            </select>
        </label><br>
        <br><label for="image">
            <h5>Image</h5>
            <input type="file" name="image" id="image" class="form-control">
        <br><button type="submit" name="add_post" class="btn btn-primary">Save</button>
    </form>
</div>

<style>
    .form-control {
        background-color: #191C24;
    }
    .form-control:focus {
        background-color: #191C24;
    }
</style>