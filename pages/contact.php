<?php
session_start();
include "header.php";
if (isset($_SESSION['loginIn'])) {
    echo "<div> class='alert alert-success'>".$_SESSION['loginIn']."</div>";
}else{
    if (isset($_SESSION['login_error'])){
        echo "<div class='alert alert-danger'>".$_SESSION['login_error']."</div>";
        unset($_SESSION['login_error']);
    }
}
?>
<section id="contact">
    <div class="container">
        <div class="form_title">Login in</div>
        <div class="contact_wrapper">
            <form action="login_check.php" method="post">
                <div class="form_body">
                    <div class="sup_inputs">
                        <input type="text" name="ism" class="name_input" placeholder="Ism" required />
                        <input type="text" name="tel" class="phone_input" placeholder="Telefon nomer" required />
                        <input type="email" name="email" class="email_input" placeholder="Email" required />
                        <input type="password" name="password" class="password_input" placeholder="Password" required />
                    </div>
                    <div class="form_button">
                        <button type="submit" name="loginIn">Login</button>
                    </div>
                </div>
            </form>
            <div class="contact_news">

            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>