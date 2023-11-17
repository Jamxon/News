<?php
include 'header.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $post = getPostById($id);
    $nashr = getNashrById($post->nashr_id);
}
?>
<section id="article">
    <div class="container">
        <div class="article_wrapper">
            <div class="article_news">
                <div class="article_title">
                    <div class="article_sup_address">
                        <img src="../images/<?=$nashr->img?>" alt="yo" /> <?php echo $nashr->title?>
                    </div>
                    <div class="article_main_title">
                        <?php echo $post->title?>
                    </div>
                </div>
                <img
                    class="article_img"
                    src="../images/<?=$post->image?>"
                    alt="article image"
                />
                <div class="article_lorem">
                    <?php echo substr($post->content,0,300)?>
                </div>
                <div class="article_lorem">
                    <?php echo substr($post->content,300,300)?>
                </div>
                <div class="article_lorem">
                    <?php echo substr($post->content,600,300)?>
                </div>
                <div class="article_lorem">
                    <?php echo substr($post->content,900,300)?>
                </div>
                <div class="article_lorem">
                    <?php echo substr($post->content,1200,300)?>
                </div>
                <div class="article_lorem">
                    <?php echo substr($post->content,1500,300)?>
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
                    <img src="../images/ad2.png" alt="ad2" />
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news" class="article_interest">
    <div class="container">
        <div class="interest_title">По вашим интересам</div>
        <div class="news_cards">
            <a href="./article.html">
                <div class="news_card">
                    <div class="news_card_title">
                        Стали известны ёмкости аккумуляторов всех моделей iPhone 13
                    </div>
                    <div class="news_card_text">
                        Во время презентации iPhone 13 Apple придала большое значения...
                    </div>
                    <div class="news_card_footer">
                        <img src="../images/digger.png" alt="kb" />
                        <div class="news_card_date">Digger.ru 14:25</div>
                    </div>
                </div>
            </a>
            <a href="./article.html">
                <div class="news_card">
                    <div class="news_card_title">
                        Nature: ученые смогли доказать природное происхождение
                        коронавируса SARS-CoV-2
                    </div>
                    <div class="news_card_text">
                        Во время презентации iPhone 13 Apple придала большое значение...
                    </div>
                    <div class="news_card_footer">
                        <img src="../images/lenta.png" alt="kb" />
                        <div class="news_card_date">Lenta.ru 10:54</div>
                    </div>
                </div>
            </a>
            <a href="./article.html">
                <div class="news_card article_card_3">
                    <div class="news_card_title">
                        Китайская марка JAC повысила цены на лифтбек и пикап в России
                    </div>
                    <div class="news_card_text">
                        Две модели китайского бренда JAC из пяти, представленных на
                        российском...
                    </div>
                    <div class="news_card_footer">
                        <img src="../images/tarantas.png" alt="kb" />
                        <div class="news_card_date">Тарантас Ньюс 10:44</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>