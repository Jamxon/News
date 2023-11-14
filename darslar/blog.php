<?php

$array = [
        [
                "title" => "MYU 2:1 Brendford",
                "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
                "created_at" => "10.12.2023",
                "author" => "Fabritsio Romano",
                "visited" => 0,
        ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
    [
        "title" => "MYU 2:1 Brendford",
        "content" => "Manchester United jamoasini mag'lubiyatdan Serning shogirdi qutqarib qoldi",
        "created_at" => "10.12.2023",
        "author" => "Fabritsio Romano",
        "visited" => 0,
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .menu{
            display: flex;
            justify-content: space-around;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div>
        <center>
            <h2>Blog</h2>
        </center>
    </div>
    <div class="menu">
        <a href="" class="alert alert-info">Asosiy sahifa</a>
        <a href="" class="alert alert-info">Sport yangiliklari</a>
        <a href="" class="alert alert-info">Texnologiya</a>
        <a href="" class="alert alert-info">Bog'lanish</a>
    </div>
    <div class="content" style="display: flex; justify-content: space-around">
        <?php
        $page = 0;
        $min = 0;
        $max = 0;
        if (isset($_GET['page'])){
            $page = $_GET['page'];
            if ($page == 0){
                $min = 0;
                $max = 3;
            }elseif($page == 4){
                $min = 3;
                $max = 6;
            }elseif($page == 8){
                $min = 6;
                $max = 9;
            }
            for ($i = $min; $i <= $max; $i++){
                ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $array[$i]['title']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $array[$i]['content']?></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p href="#" class="card-link"><?php echo $array[$i]['author']?></p>
                        <p href="#" class="card-link"><?php echo $array[$i]['created_at']?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>

    </div>
    <nav aria-label="Page navigation example">
        <form action="" method="get">
            <ul class="pagination">
                <li class="page-item"><button class="page-link" value="0" name="page">1</button></li>
                <li class="page-item"><button class="page-link" value="4" name="page">2</button></li>
                <li class="page-item"><button class="page-link" value="8" name="page">3</button></li>
            </ul>
        </form>
    </nav>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<?php
