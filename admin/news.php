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
        <a href="/php/admin/add_post.php" class="btn btn-primary">Yangilik qo'shish</a>
        <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Category</th>
            <th scope="col">Author</th>
            <th scope="col">Visited</th>
            <th scope="col">Image</th>
            <th scope="col">Created at</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody class="text-body-light">
        <tr>
            <?php
            $i  = 0;
            foreach (getNews($page) as $new){
                $i++;
                $categery = getCategoryById($new->category_id);
                $author = getAuthor($new->author_id);
                ?>
                <tr>
                <td><?php echo $i?></td>
                <td><?php echo $new->title?></td>
                <td><?php echo substr($new->content,0,200)?></td>
                <td><?php echo $categery->title?></td>
                <td><?php echo $author->firstname?></td>
                <td><?php echo $new->visited_count?></td>
                <td><?php echo $new->created_at?></td>
                <td><img src="../images/<?php echo $new->image?>" width="200px" alt=""></td>
                <td>
                    <a href="/php/admin/update_news.php?id=<?=$new->id?>" class="btn btn-primary">Tahrirlash</a>
                    <a href="#<?=$new->id?>" class="newsochirishBTN btn btn-danger">O'chirish</a>
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
                for ($i = 1; $i <= getPagination("post"); $i++ ){?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $i?>"><?= $i?></a></li>
                <?php }
            ?>
        </ul>
    </nav>
    <?php
include "footer.php";
?>
?>