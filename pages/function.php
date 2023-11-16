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
function getNewsByCategoryID($id)
{
    include "../database.php";
    $sql = "select * from post where category_id = :id";
    $state = $conn->prepare($sql);
    $state->bindParam(":id", $id);
    $state->execute();
    $total_rows = $state->fetch(PDO::FETCH_OBJ);
    return $total_rows;
}