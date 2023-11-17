<?php
define('LIMIT', 10);
$databasePath = __DIR__ . '/../database.php';
if (file_exists($databasePath)) {
    include $databasePath;
} else {
    echo 'database.php fayli topilmadi!';
}
function getCategoryForIndex($page, $with_limit = false)
{
    $offset = ($page - 1) * LIMIT;
    include __DIR__ . '/../database.php';
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
function getNewsByCategoryID($id)
{
    include __DIR__ . '/../database.php';
    $sql = "select * from post where category_id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    return $state->fetchall(PDO::FETCH_OBJ);
}
function getPaginationForIndex($table_name)
{
    include __DIR__ . '/../database.php';
    $sql = "select * from ".$table_name;
    $state = $conn->prepare($sql);
    $state->execute();
    $total_rows = $state->rowCount();
    return ceil($total_rows / 3);
}
function getPostForIndex($page, $with_limit = false)
{
    $offset = ($page - 1) * 3;
    include __DIR__ . '/../database.php';
    if ($with_limit){
        $sql = "select * from post";
        $state = $conn->prepare($sql);
    }else{
        $sql = "select * from post limit :offset, :limit";
        $state = $conn->prepare($sql);
        $state->bindValue(':offset',$offset, PDO::PARAM_INT);
        $state->bindValue(':limit',3, PDO::PARAM_INT);
    }
    $state->execute();
    $categories = $state->fetchAll(PDO::FETCH_OBJ);
    return $categories;
}
function getPostById($id)
{

    include "../database.php";
    $sql = "select * from post where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    $total_rows = $state->fetch(PDO::FETCH_OBJ);
    return $total_rows;
}

function getNashrById($id)
{
    include __DIR__ . '/../database.php';
    $sql = "select * from nashr where id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    $total_rows = $state->fetch(PDO::FETCH_OBJ);
    return $total_rows;
}