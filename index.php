<?php
session_start();
if(isset($_SESSION['idUser']))
    header('location:/suivistock/accueil');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SUIVI STOCK | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="public/loginassets/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/loginassets/css/util.css">
    <link rel="stylesheet" type="text/css" href="public/loginassets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-login100" style="background-image: url('public/loginassets/images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-30 p-b-30">
        <form class="login100-form validate-form" method="POST" action="/suivistock/controller/user">
				<span class="login100-form-title p-b-37">
					Connexion
				</span>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input class="input100" type="text" name="email" placeholder="username or email">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input class="input100" type="password" name="mdp" placeholder="password">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
                <button name="connexion" class="login100-form-btn">
                    Se connecter
                </button>
            </div>

            <div class="text-center p-t-5 p-b-5">
					<span class="txt1">
						Or login with
					</span>
            </div>

            <div class="flex-c">
                <a href="#" class="login100-social-item">
                    <i class="fa fa-facebook-f"></i>
                </a>

                <a href="#" class="login100-social-item">
                    <img src="public/loginassets/images/icons/icon-google.png" alt="GOOGLE">
                </a>
            </div>
            <?php
            if (isset($_GET['ok'])) {
                if ($_GET['ok'] == 0) {
            ?>
            <div class="alert alert-danger mt-4" role="alert">Echec de connexion !</div>
            <?php
                }
            }
            ?>
<!---->
<!--            <div class="text-center">-->
<!--                <a href="#" class="txt2 hov1">-->
<!--                    Sign Up-->
<!--                </a>-->
<!--            </div>-->
        </form>


    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="public/loginassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="public/loginassets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="public/loginassets/vendor/bootstrap/js/popper.js"></script>
<script src="public/loginassets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="public/loginassets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="public/loginassets/vendor/daterangepicker/moment.min.js"></script>
<script src="public/loginassets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="public/loginassets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="public/loginassets/js/main.js"></script>

</body>
</html>