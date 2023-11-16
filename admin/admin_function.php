<?php
include "../constants.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getCategory($page, $with_limit = false)
{
    $offset = ($page - 1) * LIMIT;
    include "../database.php";
    if ($with_limit){
        $sql = "select * from category";
        $state = $conn->prepare($sql);
    }else{
        $sql = "select * from category limit :offset, :limit";
        $state = $conn->prepare($sql);
        $state->bindValue(':offset',$offset, PDO::PARAM_INT);
        $state->bindValue(':limit',LIMIT, PDO::PARAM_INT);
    }
    $state->execute();
    $categories = $state->fetchAll(PDO::FETCH_OBJ);
    return $categories;
}

function getPagination($table_name)
{
    include "../database.php";
    $sql = "select * from ".$table_name;
    $state = $conn->prepare($sql);
    $state->execute();
    $total_rows = $state->rowCount();
    return ceil($total_rows / LIMIT);
}
function addCategory($title){
    include "../database.php";
    if (isset($_POST['cat_add'])) {
        $title = $_POST['title'];
        $sql = "insert into category (title) values (:title)";
        $state = $conn->prepare($sql);
        $state->bindParam(":title", $title);
        $state->execute();
        header("Location: /PHP/admin/category.php");
        exit;
    }
}
if (isset($_POST['cat_add'])){
    $title = $_POST['title'];
    addCategory($title);
    header("Location: /PHP/admin/category.php");
    exit;
}
if (isset($_POST['cat_update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    updateCategory($id, $title);
    header("Location: /PHP/admin/category.php");
    exit;
}
if (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] == "yes"){
        $id = $_GET['id'];
        $confirm = $_GET['confirm'];
        deleteCategory($id);

}elseif (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] == "no") {
        header("Location: /php/admin/category.php");
        exit;
}
function deleteCategory($id)
{
    include "../database.php";
    $sql = "delete from category where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    header("Location: /php/admin/category.php");
    exit;
}
$input_data = json_decode(file_get_contents('php://input'), true);
if (isset($input_data['categoryID'])){
    $categoryID = $input_data['categoryID'];
}
if (isset($input_data['newsID'])){
    $newsID = $input_data['newsID'];
}
if (isset($input_data['tagID'])){
    $tagID = $input_data['tagID'];
}
if (isset($newsID)){
    echo "$newsID";
    deleteNews($newsID);
}
if (isset($tagID)){
    echo "$tagID";
    deletetag($tagID);
}
if (isset($categoryID)){
    echo "$categoryID";
    deleteCategory($categoryID);
}
function updateCategory($id, $title)
{
    include "../database.php";
    $sql = "update category set title = :title where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id, PDO::PARAM_INT);
    $state->bindParam(":title", $title);
    $state->execute();
}
function getCategoryById($id)
{

    include "../database.php";
    $sql = "select * from category where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    $total_rows = $state->fetch(PDO::FETCH_OBJ);
    return $total_rows;
}
//--------------------news page functions--------------------

function getNews($page)
{
    $offset = ($page - 1) * LIMIT;
    include "../database.php";
    $sql = "select * from post order by created_at desc limit :offset, :limit";
    $state = $conn->prepare($sql);
    $state->bindValue(':offset',$offset, PDO::PARAM_INT);
    $state->bindValue(':limit',LIMIT, PDO::PARAM_INT);
    $state->execute();
    $news = $state->fetchAll(PDO::FETCH_OBJ);
    return $news;
}
function addPost($title, $content, $category_id, $author_id, $tag = null){
        include "../database.php";
        $title = htmlspecialchars($title);
        $content = htmlspecialchars($content);
        $category_id = htmlspecialchars($category_id);
        $author_id = htmlspecialchars($author_id);
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, "../images/$image");
        $sql = "insert into post (title,content,category_id,author_id,created_at,updated_at,visited_count,image) 
        values (:title,:content,:category_id,:author_id,now(),now(),0,:image)";
        $state = $conn->prepare($sql);
        $state->bindParam(":title", $title);
        $state->bindParam(":content", $content);
        $state->bindParam(":category_id", $category_id);
        $state->bindParam(":author_id", $author_id);
        $state->bindParam(":image", $image);
        $state->execute();
        $post_id = $conn->lastInsertId();
        if ($tag != null){
            foreach ($tag as $item){
                $sql = "insert into post_tag (post_id,tag_id) values (:post_id,:tag_id)";
                $state = $conn->prepare($sql);
                $state->bindParam(":post_id", $post_id, PDO::PARAM_INT);
                $state->bindParam(":tag_id", $item, PDO::PARAM_INT);
                $state->execute();
            }
        }
}

function getAuthor($id, $without_id = false)
{
    include "../database.php";
    if ($without_id){
        $sql = "select * from user";
        $state = $conn->prepare($sql);
        $state->execute();
        $total_rows = $state->fetchall(PDO::FETCH_OBJ);
    }
    else{
        $sql = "select * from user where id = :id";
        $state = $conn->prepare($sql);
        $state->bindParam(":id", $id);
        $state->execute();
        $total_rows = $state->fetch(PDO::FETCH_OBJ);
    }

        return $total_rows;
}

function getNewsByID($id)
{
    include "../database.php";
    $sql = "select * from post where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    $total_rows = $state->fetch(PDO::FETCH_OBJ);
    return $total_rows;
}
if (isset($_POST['news_update'])){
    $id = $_POST['id'];
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
    updateNews($id, $title, $content, $category_id, $author_id);
    header("Location: /PHP/admin/news.php");
    exit;
}
function updateNews($id, $title, $content, $category_id, $author_id)
{
    include "../database.php";
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);
    $category_id = htmlspecialchars($category_id);
    $author_id = htmlspecialchars($author_id);
    $image = $_FILES['image']['name'];
    $sql = "update post set title = :title, content = :content,
                category_id = :category_id, author_id = :author_id,
                updated_at = now(), image = :image where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id, PDO::PARAM_INT);
    $state->bindParam(":title", $title);
    $state->bindParam(":content", $content);
    $state->bindParam(":category_id", $category_id);
    $state->bindParam(":author_id", $author_id);
    $state->bindParam(":image", $image);
    $state->execute();
}
function deleteNews($id)
{
    include "../database.php";
    $sql = "delete from post where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
//    header("Location: /php/admin/news.php");
//    exit;
}
//----------------------tag functions-------------------
function getTag($page, $with_limit = false)
{
    $offset = ($page - 1) * LIMIT;
    include "../database.php";
    if ($with_limit){
        $sql = "select * from tag";
        $state = $conn->prepare($sql);
    }else{
        $sql = "select * from tag limit :offset, :limit";
        $state = $conn->prepare($sql);
        $state->bindValue(':offset',$offset, PDO::PARAM_INT);
        $state->bindValue(':limit',LIMIT, PDO::PARAM_INT);
    }
    $state->execute();
    $categories = $state->fetchAll(PDO::FETCH_OBJ);
    return $categories;
}
function addtag($name): void
{
        include "../database.php";
        $sql = "insert into tag (name) values (:name)";
        $state = $conn->prepare($sql);
        $state->bindParam(":name", $name);
        $state->execute();

}

function getTagById($id)
{
    include "../database.php";
    $sql = "select * from tag where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    $total_rows = $state->fetch(PDO::FETCH_OBJ);
    return $total_rows;
}
if (isset($_POST['tag_update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    updateTag($id,$name);
    header("Location: /php/admin/tag.php");
}
function updateTag($id, $name)
{
    include "../database.php";
    $sql = "update tag set name = :name where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id, PDO::PARAM_INT);
    $state->bindParam(":name", $name);
    $state->execute();
}

function deletetag($id)
{
    include "../database.php";
    $sql = "delete from tag where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
}
?>