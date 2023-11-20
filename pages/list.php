<?php
include "header.php";
?>

<section id="ad">
    <div class="container">
        <img src="../images/listad.png" alt="ad" />
    </div>
</section>
<section id="world">
    <div class="container">
        <div class="world_title">
            <?php
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                else
                {
                    $id = 1;
                }
                $posts = getNewsByCategoryID($id);
            ?>
        </div>
        <div class="world_wrapper">
            <div class="world_news">
                <div class="world_cards">
                    <?php
                            foreach ($posts as $post){?>
                            <a href="/PHP/pages/article.php?id=<?=$post->id?>">
                                <div class="world_card">
                                    <img class="world_news_img" src="../images/<?=$post->image?>" alt="world news">
                                    <div class="world_texts">
                                        <div class="world_news_title">
                                            <?=$post->title?>
                                        </div>
                                        <div class="world_news_lorem">
                                            <?php echo substr($post->content, 0,200)?>
                                        </div>
                                        <div class="world_news_date">
                                            <?php
                                                $nashr = getNashrById($post->nashr_id);
                                            ?>
                                            <img src="../images/<?=$nashr->img?>" alt="">
                                            <div><?=$nashr->title?></div>
                                            <?php
                                            $timestamp = strtotime($post->created_at);
                                            ?>
                                            <div><?php echo date("h:i",$timestamp)?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                                <?php }
                    ?>
                </div>
                <div class="world_news_button">
                    <button>Показать ещё</button>
                </div>
            </div>
            <?php
            include "../Qiziqarli.php";
            ?>
        </div>
    </div>
</section>
<?php
include "footer.php";