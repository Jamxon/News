<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            if (isset($_SESSION['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?=$_SESSION['error']?>
                </div>
                <?php
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])){?>
                <div class="alert alert-success" role="alert">
                    Siz muvaffaqiyatli ro'yhatdan o'tdingiz, endi login qilshingiz mumkin!
                </div>
                <?php
                unset($_SESSION['success']);
            }
            ?>
            <form class="row g-3" method="post" action="login_check.php">
                <h2>Login</h2>
                <div class="col-md-12">
                    <label for="validationServerUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <input type="email" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : null); unset($_SESSION['user']);?>" class="form-control" id="validationServerUsername" name="username" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" required class="form-control" id="password" name="password">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" name="login" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>