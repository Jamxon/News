<?php
include "header.php";
include "admin_function.php";
if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
?>
    <table class="table table-striped">
        <a href="/php/admin/add_tag.php" class="btn btn-primary">Tag qo'shish</a>
        <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tag nomi</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody class="text-body-light">
        <tr>
            <?php
            $i = 0;
            foreach (getTag($page) as $category){
                $i++;
            ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $category->name?></td>
            <td>
                <a href="/php/admin/update_tag.php?id=<?=$category->id?>" class="btn btn-primary">Tahrirlash</a>
                <a href="#<?=$category->id?>" class="tagBTN btn btn-danger">O'chirish</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tr>

        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            for ($i = 1; $i <= getPagination("tag"); $i++ ){?>
                <li class="page-item"><a class="page-link" href="?page=<?= $i?>"><?= $i?></a></li>
            <?php }
            ?>
        </ul>
    </nav>
<?php
include "footer.php";
?>