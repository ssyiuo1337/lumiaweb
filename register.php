<!DOCTYPE html>
<html>

<!-- Mirrored from excellentclient.pw/sregister by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Lumia » Регистрация</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="css/main.css" rel="stylesheet">
    <link href="css/auth.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <script src="../code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src='../www.google.com/recaptcha/api.js' async defer ></script>

    <script>
        $(document).ready(function(){
            $("#registerForm").submit(function(event){
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "api/register",
                    data: $(this).serialize(),
                    success: function(response){
                        if (response !== "OK") {
                            $("#result").html(response);
                        }else {
                            window.location.href = "login.php";
                        }
                    }
                });
            });
        });
    </script>


</head>
<body class="index-page">
<header><div>

<header id="header" class="header d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.php" class="logo d-flex align-items-center me-auto">
            <img src="img/logo.png" alt="">
            <h1>Lumia</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php#hero">Главная<br></a></li>
                <li><a href="#footer">Документы</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>




        <a class="btn-getstarted flex-md-shrink-0" style="margin-left: 30px;" href="login.php">Войти</a>

    </div>
</header>
</div></header>

 <div class="customContainer" style="margin-top: -15px;">
    <div class="form signup">
        <div class="form-content">
            <div style="text-align: center;">
                <img src="img/logo.png" width="80px"> </img>
                <div class="titleText">Создание аккаунта</div>
            </div>

<form id="registerForm" action="api/authorization/register.php" method="post">
    <div class="field input-field">
        <input type="email" id="email" placeholder="Введите e-mail" required name="email">
    </div>

    <div class="field input-field">
        <input type="text" id="username" placeholder="Придумайте login" required name="login">
    </div>

    <div class="field input-field">
        <input type="password" id="password" placeholder="Придумайте пароль" required name="pw_hash">
    </div>

    <div style="color: red; text-align: center;" class="mt-2">
        <div id="result"></div>
    </div>

    <div style="display: flex; justify-content: center;">
        <a href="login.php" style="margin-top: 34px;">Уже есть аккаунт?</a>
        <button class="btn btn-getstarted mt-4" style="margin-left: 30px;">Регистрация</button>
    </div>
</form>
        </div>
    </div>
</div>
<footer><div>

<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.php" class="d-flex align-items-center">

                    <!--<img src="img/logo.png"class="px-2" alt="" width="50px;"!-->

                    <span>Lumia</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>ukm4ks pidr</p>
                    <p>$$$$$$$$$$$$$$$$$</p>
                    <p class="mt-3"><strong>Email: ssyiuo@gmail.com </strong><span></span></p>
                    <p>ANALOSE.CC</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Навигация</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="index.php">Главная</a></li>
                     <li><i class="bi bi-chevron-right"></i> <a href="index.php#faq">Вопросы</a></li>
                     <li><i class="bi bi-chevron-right"></i> <a href="index.php#alt-features">Наши качества</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Документы</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="eula.php">Пользовательское соглашение</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="privacy_policy.php">Обработка данных</a></li>
                  </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Наши социальные сети</h4>
                <p>Здесь мы собрали все наши официальные социальные сети, мы будем очень рады вашей подписке.</p>
                <div class="social-links d-flex">
                    <a href="https://www.youtube.com/@luvbeeq" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://t.me/excellent_recode" target="_blank"><i class="bi bi-telegram"></i></a>
                    <a href="https://discord.gg/excellentrecode" target="_blank"><i class="bi bi-discord"></i></a>
                </div>
            </div>

        </div>
    </div>


    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Lumia</strong><span>          -> All Rights Reserved</span></p>
    </div>

</footer>
</div></footer>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from excellentclient.pw/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:12 GMT -->
</html>
<script src="js/main.js"></script>
