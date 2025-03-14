<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from excellentclient.pw/eula by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Lumia » Документы</title>

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
            <h1>Lumia</h1>
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

<main class="container  " style="flex-grow: 1;  display: flex; margin-top: 8%;
    min-height: 100vh;" data-aos="zoom-out">
    <div class="cont ">
        <p class="text-center fw-bold fs-3">Пользовательское соглашение</p>
        <text style="white-space: pre-line;">

            Настоящее Пользовательское соглашение (далее – Соглашение) регулирует отношения между ЭКСЕЛЛЕНТКЛИЕНТ - владельцем интернет-ресурса Lumia - и любым физическим лицом - Пользователем интернет-ресурса Lumia

            Предмет соглашения
            1.1 Компания занимается разработкой программного обеспечения, включая дополнительные загружаемые контенты (DLC), предназначенные для использования на платформе Minecraft.
            1.2 Пользователь приобретает доступ к DLC, предоставляемому Компанией, в соответствии с условиями настоящего соглашения.

            Ограничения использования DLC
            2.1 Пользователь обязуется не передавать, не распространять и не использовать данные, полученные при входе в систему или использовании DLC, без предварительного письменного разрешения Компании.
            2.2 Компания является независимой организацией и не имеет прямого отношения к Mojang и Microsoft. Пользователь признает и понимает, что Компания не имеет связи с указанными компаниями.
            2.3. DLC, предоставляемые Проектом, не являются официальными продуктами Mojang и не имеют одобрения или поддержки со стороны Mojang или Microsoft Corporation.
            2.4. Все товарные знаки, логотипы и авторские права, относящиеся к Minecraft и Mojang, являются собственностью соответствующих правообладателей.

            Отзыв доступа к DLC
            3.1 Пользователь понимает и соглашается с тем, что доступ к DLC может быть отозван администратором проекта в любой момент без предварительного уведомления.

            Возврат денежных средств
            4.1 Пользователь вправе запросить полный возврат суммы денежных средств в следующих случаях:
            - Товар не был активирован или запущен после приобретения.

            4.2 Пользователь вправе запросить частичный возврат суммы денежных средств в течение 14 дней в следующих случаях:
            - DLC не оправдало ожидание Пользователя
            - Устройство Пользователя выдает ошибки при запуске DLC, из-за проблем ОС Пользователя.

            Для возврата, Пользователь должен написать письмо на действующий Email адрес, который можно найти в разделе контактов.

            Ответственность
            5.1 Компания не несет ответственности за возможные проблемы, ошибки или повреждения, возникшие во время или после использования DLC Пользователем.
            5.2 Пользователь осознает и соглашается с тем, что DLC представляют собой цифровой продукт, и в случае технических неполадок, ошибок или проблем, Компания не гарантирует их исправление или возмещение ущерба.

            Заключительные положения
            6.1 Настоящее соглашение является юридически обязательным документом, регулирующим отношения между Компанией и Пользователем.
            6.2 Проект оставляет за собой право в любое время изменять условия данного Соглашения путем размещения обновленной версии на своем веб-сайте или иным уведомлением Пользователю.
            6.3. Пользователь обязуется периодически проверять наличие обновлений и изменений в настоящем Соглашении. Продолжение использования Разработок после внесения изменений означает согласие Пользователя с обновленными условиями.
            6.4 Настоящее соглашение регулируется действующим законодательством РК, и все споры, возникающие в связи с настоящим соглашением, подлежат разрешению в соответствии с законодательством РК.
            Подтверждая свое согласие и принимая условия настоящего соглашения, Пользователь соглашается с обязательствами и ограничениями, установленными в настоящем соглашении.

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

                    <span>Lumia</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Наш продукт не связан с MojangAB</p>
                    <p>все средства идут на развитие проекта.</p>
                    <p class="mt-3"><strong>Email: </strong><span><a href="cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="d4b1acb7b1b8b8b1baa0b7b8bdb1baa0fabab1a0a3bba6bf94b3b9b5bdb8fab7bbb9">[email&#160;protected]</a></span></p>
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
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Lumia</strong><span>          -> All Rights Reserved</span></p>
    </div>

</footer>
</div></footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/aos/aos.js"></script>
<script src="js/main.js"></script>

</body>



<!-- Mirrored from excellentclient.pw/eula by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:11 GMT -->
</html>
