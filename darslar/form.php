<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    $surname = $_POST['surname'];

    $username = $_POST['username'];

    $password = $_POST['password'];

    $confirm_password = $_POST['confirm_password'];

    $error = [];
    $status = 0;
    if (strlen($name) >= 3){
        $status += 1;
    }
    else{
        $error[] = "Ismingizda kamida 3 ta harf bo'lishi kerak";
    }
    if (strlen($surname) >= 3){
        $status += 1;
    }
    else{
        $error[] = "Familyadagi harflar soni kam";
    }
    if (strlen($password) >= 8){
        $status += 1;
    }
    else{
        $error[] = "Paroldagi elementlar soni kam";
    }
    if (is_string(substr($password, -2,2))){
        $status += 1;
    }
    else{
        $error[] = "Paroldagi oxirgi kamida 2 ta harf soni bo'lishi kerak";
    }
    if($password == $confirm_password){
        $status += 1;
    }else{
        $error[] = "Parollar mos kelmadi";
    }
    if ($status == 5){
        echo "Success";
    }
    else{
       print_r($error);
    }
    echo substr($password, -2,2);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" required class="form-control" placeholder="Name">
    <input type="text" name="surname" required class="form-control" placeholder="Surname">
    <input type="email" name="username" required class="form-control" placeholder="Username">
    <input type="password" name="password" required class="form-control" placeholder="Password">
    <input type="password" name="confirm_password" required class="form-control" placeholder="Confirm password">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php

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
print_r($kitoblar);