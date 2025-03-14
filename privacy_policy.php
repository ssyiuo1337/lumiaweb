<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from excellentclient.pw/privacy_policy by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Rave » Документы</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="UTF-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="css/main.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/logo.png">


</head>

<body class="index-page">

<header><div>

<header id="header" class="header d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.php" class="logo d-flex align-items-center me-auto">
            <img src="img/logo.png" alt="">
            <h1>Rave</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php#hero">Главная<br></a></li>
                <li><a href="#footer">Документы</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


        

        <?php if ($isLoggedIn): ?>
            <a href="/dashboard/dashboard.php" class="btn-getstarted flex-md-shrink-0">Личный кабинет</a>
        <?php else: ?>
            <a href="login.php" class="btn-getstarted flex-md-shrink-0">Войти</a>
        <?php endif; ?>
    </div>
</header>
</div></header>

<main class="container" style="flex-grow: 1;  margin-top: 10%; display: flex;
    min-height: 100vh;" data-aos="zoom-out">
    <div>
        <p class="text-center fw-bold fs-3">Пользовательское соглашение</p>
        <text style="white-space: pre-line;">
            В соответствии с Федеральным законом от 27.07.2006 № 152-ФЗ «О персональных данных» настоящим я полностью и безоговорочно принимаю политику конфиденциальности, даю обществу ЭКСЕЛЛЕНТКЛИЕНТ, согласие на автоматизированную, а также без использования средств автоматизации обработку путем сбора, систематизации, накопления, хранения, уточнения и удаления, а также путем передачи (предоставления) третьим лицам, привлеченных обществом ЭКСЕЛЛЕНТКЛИЕНТ, моих персональных данных:
            - имени и фамилии;
            - адрес электронной почты;
            указанных мною на сайте excellentclient.pw, для следующих целей:
            - писем с целью обратной связи со мной;
            - оказания услуг, предусмотренных сайтом;
            - повышения качества оказываемых услуг, качества работы сайта excellentclient.pw
            - обработки обращений;
            - получения программного обеспечения, информации, и иных материалов от excellentclient.pw
            Настоящее согласие действует до даты отзыва согласия на обработку персональных связи, для этого необходимо написать письмо на адрес <a href="cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="60051803050c0c050e14030c09050e144e0e0514170f120b20070d01090c4e030f0d">[email&#160;protected]</a>
        </text>
    </div>
</main>
<footer id="footer"><div>

<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.php" class="d-flex align-items-center">

                    <!--<img src="img/logo.png"class="px-2" alt="" width="50px;"!-->

                    <span>Rave</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Наш продукт не связан с MojangAB</p>
                    <p>все средства идут на развитие проекта.</p>
                    <p class="mt-3"><strong>Email: </strong><span><a href="cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="32574a51575e5e575c46515e5b575c461c5c5746455d405972555f535b5e1c515d5f">[email&#160;protected]</a></span></p>
                    <p>Тарасов Сергей Петрович | ИНН 713602155690</p>
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
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Rave</strong><span>          -> All Rights Reserved</span></p>
    </div>

</footer>
</div></footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/aos/aos.js"></script>
<script src="js/main.js"></script>

</body>



<!-- Mirrored from excellentclient.pw/privacy_policy by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:11 GMT -->
</html>