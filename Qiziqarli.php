<?php

?>
<div class="home_news">
    <div class="home_card">
        <div class="home_card_title">Qiziqarli</div>
        <?php
        $qiziq = getNewsByCategoryID(101);
        foreach ($qiziq as $item){
            $nashr1 = getNashrById($item->nashr_id);

            ?>
            <div class="home_card_news">
                <div class="home_news_title">
                    <?=$item->title?>
                </div>
                <div class="home_news_date"><?=$nashr1->title?></div>
            </div>
        <?php }
        ?>
        <div class="home_ad">
            <img src="../images/ad2.png" alt="ad2" />
        </div>
    </div>
</div>