<?php
include "pages/header.php";
if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
?>
<section id="ad">
    <div class="container">
        <img src="./images/ad.png" alt="ad" />
    </div>
</section>
<section id="news">
    <div class="container">
        <div class="news_cards">
            <?php
            foreach (getPostForIndex($page) as $post){?>
                <a href="./pages/article.php?id=<?=$post->id?>">
                    <div class="news_card">
                        <div class="news_card_title">
                            <?php echo substr($post->title,0,80)?>
                        </div>
                        <div class="news_card_text">
                            <?php echo substr($post->content, 0,150)?>
                        </div>
                        <div class="news_card_img">
                            <img src="./images/<?=$post->image?>" alt="news image 1" />
                        </div>
                        <div class="news_card_footer">
                                <?php
                                $nashr = getNashrById($post->nashr_id);
                                ?>
                                <img src="./images/<?=$nashr->img?>" alt="" />
                                <div><?=$nashr->title?></div>

                        </div>
                    </div>
                </a>
           <?php }
            ?>
                <nav aria-label="Page navigation example" style="text-align: center; width: 100%">
                    <ul class="pagination" style="display: flex; justify-content: center; gap: 10px; margin-top:30px" >
                        <?php
                        for ($i = 1; $i <= getPaginationForIndex("post"); $i++ ){?>
                            <li class="page-item" style="background-color: #fff; padding: 5px 10px; border: 1px solid #333"><a class="page-link" style="color: #333"  href="?page=<?= $i?>"><?= $i?></a></li>
                        <?php }
                        ?>
                    </ul>
                </nav>
        </div>

    </div>
</section>
<!--<section id="notifications">-->
<!--    <input type="checkbox" id="noti-check" />-->
<!--    <label class="full_bg_wrapper" for="noti-check"> </label>-->
<!--    <div class="noti_modal">-->
<!--        <label for="noti-check">-->
<!--            <i class="fa-solid fa-xmark"></i>-->
<!--        </label>-->
<!--        <div class="modal_title">-->
<!--            Хотите быть в курсе свежих новостей? <br />-->
<!--            Включите уведомления!-->
<!--        </div>-->
<!--        <label for="noti-check" class="button-label">-->
<!--            <button type="button">Включит</button>-->
<!--        </label>-->
<!--    </div>-->
<!--    <div class="container">-->
<!--        <div class="noti_wrapper">-->
<!--            <div class="noti_title">-->
<!--                Хотите быть в курсе свежих новостей? <br />-->
<!--                Включите уведомления!-->
<!--            </div>-->
<!--            <label for="noti-check" class="button-label-container">-->
<!--                <button>Включит</button>-->
<!--            </label>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section id="world">
    <div class="container">
        <div class="world_title">Dunyo</div>
        <div class="world_wrapper">
            <div class="world_news">
                <div class="world_cards">
                    <?php
                        $posts = getNewsByCategoryID(103);
                        foreach ($posts as $post){?>
                            <a href="./pages/article.php?id=<?=$post->id?>">
                                <div class="world_card">
                                    <img
                                            class="world_news_img"
                                            src="./images/<?=$post->image?>"
                                            alt="world news"
                                    />
                                    <div class="world_texts">
                                        <div class="world_news_title">
                                            <?php echo substr($post->title, 0,100)?>
                                        </div>
                                        <div class="world_news_lorem">
                                            <?php echo substr($post->content, 0,200)?>...
                                        </div>
                                        <div class="world_news_date">
                                            <?php
                                            $nashr = getNashrById($post->nashr_id);
                                            ?>
                                            <img src="./images/<?=$nashr->img?>" alt="" />
                                            <div><?=$nashr->title?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        <?php }
                    ?>
                </div>
            </div>
            <?php
                include "Qiziqarli.php";
            ?>
    </div>
</section>
<?php
include "pages/footer.php";
?>