<?php
include "header.php";
include "admin_function.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $category = getCategoryById($id);
}
?>
<h2><?=$category->title?></h2>
<h3>Qiymatini rostdan ham o'chirmoqchimisiz</h3>
<a href="/php/admin/delete_category.php?id=<?=$category->id?>&confirm=yes" class="btn btn-info">Ha</a>
<a href="/php/admin/delete_category.php?id=<?=$category->id?>&confirm=no" class="btn btn-primary">Yo'q</a>