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
            <div class="home_news">
                <div class="home_card">
                    <div class="home_card_title">Главное</div>
                    <div class="home_card_news">
                        <div class="home_news_title">
                            В Фергане создадут узбекско-пакистанский университет
                        </div>
                        <div class="home_news_date">Sputnik Узбекистан 14:09</div>
                    </div>
                    <div class="home_card_news">
                        <div class="home_news_title">
                            Узбекистан утвердил соглашение о содействии занятости в
                            странах СНГ
                        </div>
                        <div class="home_news_date">ИА Красная Весна 10:19</div>
                    </div>
                    <div class="home_card_news">
                        <div class="home_news_title">
                            В Узбекистане увеличиваются очереди за автомобилями UzAuto
                        </div>
                        <div class="home_news_date">
                            Северная газета (Армянск) 13:50
                        </div>
                    </div>
                    <div class="home_card_news">
                        <div class="home_news_title">
                            Минтуризма опровергло приостановку выплат за шаги
                        </div>
                        <div class="home_news_date">Sputnik Узбекистан 14:32</div>
                    </div>
                </div>
                <div class="home_ad">
                    <img src="../images/bigad.png" alt="ad2" />
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";