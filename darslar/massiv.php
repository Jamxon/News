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
$kitoblar = [
    'tragediya' => [
        [
            'nomi' => "Otgan kunlar",
            'janr' => 'tragediya',
            'Bet' => 200
        ],
        [
            'nomi' => "Stiv Jobs",
            'janr' => "tragediya",
            "bet" => 200
        ],
        [
            'nomi' => "Hamsa",
            "janr" => 'tragediya',
            'bet' => 580
        ],
    ],
    'komediya' => [
        [
            'nomi' => 'Molxona',
            'janr' => 'komediya',
            'bet' => 150
        ],
        [
            'nomi' => 'Daftar hoshiyasidan bitiklar',
            'janr' => 'komediya',
            'bet' => 140
        ]
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
        <a href="" class="btn btn-secondary">Asosiy sahifa</a>

        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sport yangiliklari
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">APL</a>
                <a class="dropdown-item" href="#">OCHL</a>
                <a class="dropdown-item" href="#">ECHL</a>
            </div>
        </div>

        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Texnologiya
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Kompyuter</a>
                <a class="dropdown-item" href="#">Mobil telefonlar</a>
            </div>
        </div>
        <a href="" class="btn btn-secondary">Bog'lanish</a>
    </div>
    <div class="content" style="display: flex; justify-content: space-around">
        <?php
        $page = 0;
        $min = 0;
        $max = 0;
        if (isset($_GET['page'])){
            $page = $_GET['page'];
//            if ($page == 0){
//                $min = 0;
//                $max = 3;
//            }elseif($page == 4){
//                $min = 4;
//                $max = 7;
//            }elseif($page == 8){
//                $min = 8;
//                $max = 9;
//            }
            $min = $page;
            if($page < count($array) - 4) {
                $max = $page + 3;
            }
            else{
                $max = count($array) - 1;
            }
            for ($i = $min; $i <= $max; $i++){
                ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2><?php echo $i ?></h2>
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
                <?php
                for ($i = 0; $i < count($array) / 4; $i++){
                        ?>
                        <li class="page-item"><button class="page-link" value="<?php echo $i * 4?>" name="page"><?php echo $i + 1?></button></li>
                        <?php
                    }
                ?>
            </ul>
        </form>
    </nav>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $janri = $_POST['janri'];
    $bet = $_POST['bet'];

    $kitob = [
        'name' => $name,
        'bet' => $bet
    ];

    if (isset($kitoblar[$janri])) {
        $kitoblar[$janri][] = $kitob;
    } else {
        $kitoblar[$janri] = [$kitob];
    }
}

print_r($kitoblar);
?>

<div class="container">
    <form action="" method="post">
        <input type="text" name="name" required class="form-control" placeholder="Kitob nomini kiriting">
        <input type="text" name="janri" required class="form-control" placeholder="Kitob janrini kiriting">
        <input type="text" name="bet" required class="form-control" placeholder="Kitob betlari sonini kiriting">
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
