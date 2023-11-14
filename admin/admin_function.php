<?php
include "../constants.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getCategory($page, $with_limit = false)
{
    $offset = ($page - 1) * LIMIT;
    
    include "../database.php";
    $sql = "select * from category limit :offset, :limit";
    $state = $conn->prepare($sql);
    $state->bindValue(':offset',$offset, PDO::PARAM_INT);
    $state->bindValue(':limit',LIMIT, PDO::PARAM_INT);
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
    $sql = "select * from post limit :offset, :limit";
    $state = $conn->prepare($sql);
    $state->bindValue(':offset',$offset, PDO::PARAM_INT);
    $state->bindValue(':limit',LIMIT, PDO::PARAM_INT);
    $state->execute();
    $news = $state->fetchAll(PDO::FETCH_OBJ);
    return $news;
}

?>