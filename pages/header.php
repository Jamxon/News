<?php

include "function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article</title>
    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
    />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<header>
    <nav>
        <div class="sup_nav">
            <div class="container sup_nav_wrapper">
                <div class="logo">
                    <a href="/PHP/index.php">Namanganliklar 24</a>
                </div>
                <input type="checkbox" id="nav-bars" />
                <label for="nav-bars" class="bar_label"
                ><i class="fa-solid fa-bars"></i
                    ></label>
                <label for="nav-bars" class="parda"></label>
                <div class="nav-texts">
                    <label for="nav-bars"><i class="fa-solid fa-xmark"></i></label>
                    <div class="nav_prices">
                        <div class="dollar_price"><span>$</span> 10137.2</div>
                        <div class="p_price"><span>P</span> 138.26</div>
                    </div>
                    <div class="nav_search">
                        <span><img src="../images/search.svg" alt="" /></span>
                        <input type="text" placeholder="Поиск" />
                    </div>
                    <div class="nav_language">
                        <input type="checkbox" id="language" />
                        <label for="language">
                            <div class="lang_uz">УЗ</div>
                            <div class="lang_ru">РУ</div>
                        </label>
                    </div>
                    <div class="nav_btn">
                        <a href="../pages/contact.php">
                            <button>Kirish uchun</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub_nav">
            <div class="container">
                <ul>
                <?php
                    $category = getCategoryForIndex(1,true);
                    foreach ($category as $item){?>
                        <li>
                            <a href="/php/pages/list.php?id=<?=$item->id?>"><?=$item->title?></a>
                        </li>
                    <?php }
                ?>
                </ul>
            </div>
        </div>
    </nav>
</header>