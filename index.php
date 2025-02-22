<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lumia » Главная</title>
  <link rel="icon" type="image/png" href="dashboard/icon.png" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/main.css" rel="stylesheet">
   <meta charset="UTF-8">

    <style>
        #header {
            height: 70px; /* Reduced from default */
            padding: 5px 0; /* Reduced padding */
        }

        .header .logo img {
            max-height: 65px; /* Reduced logo size */
        }

        .header .logo h1 {
            font-size: 20px; /* Reduced font size */
            margin: 0;
        }

        .btn-getstarted {
            padding: 6px 16px; /* Reduced padding */
            font-size: 14px; /* Reduced font size */
        }

        .container {
            margin: 80px auto 0; /* Adjusted top margin */
            max-width: 1200px;
        }

        .navmenu ul li a {
            padding: 8px 15px; /* Reduced padding */
            font-size: 14px; /* Reduced font size */
        }

        .feature-icon {
        width: 60px;  /* Reduced from 100px */
        height: 60px; /* Reduced from 100px */
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px; /* Increased margin */
        float: left;
        transition: all 0.3s ease;
        overflow: hidden;
        flex-shrink: 0; /* Prevent icon shrinking */
    }

    .feature-img {
        width: 32px;    /* Adjusted size */
        height: 32px;   /* Adjusted size */
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .icon-box {
        padding: 25px;  /* Increased padding */
        margin: 15px 0; /* Added vertical margin */
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
        overflow: hidden;
        display: flex;  /* Added flex display */
        align-items: flex-start; /* Align items at top */
    }

    .icon-box > div:not(.feature-icon) {
        flex: 1;  /* Take remaining space */
    }

    .icon-box h4 {
        margin-bottom: 1px; /* Added space below title */
        color: #fff;
    }

    .icon-box p {
        margin: 0;
        line-height: 1.0;
    }

    .icon-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .icon-box:hover .feature-icon {
        background: rgba(255, 255, 255, 0.2);
    }

    .icon-box:hover .feature-img {
        transform: scale(1.15);
    }

    /* Added responsive adjustments */
    @media (max-width: 768px) {
        .icon-box {
            padding: 20px;
            margin: 10px 0;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .feature-img {
            width: 28px;
            height: 28px;
        }
    }

   /* Feature section container */
   #alt-features .container {
        padding: 20px 15px;
        max-width: 1140px;
    }

    /* Row layout */
    .alt-features .row.gy-5 {
        --bs-gutter-y: 40px;
        --bs-gutter-x: 40px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; /* Align items to the start */
        margin: 0 100px;
    }

    /* Column sizing */
    .col-md-6 {
        width: calc(50% - 40px); /* Two boxes per row */
        padding: 0;
        margin: 20px;
        box-sizing: border-box;
    }

    /* Box styling */
    .icon-box {
        height: 220px; /* Fixed height */
        width: 100%;
        padding: 20px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column; /* Stack icon and text vertically */
        align-items: flex-start; /* Align items to the start */
        gap: 10px;
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px; /* Add space below icon */
    }

    .feature-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .icon-box h4 {
        margin-bottom: 5px;
        color: #fff;
        font-size: 1.2rem;
    }

    .icon-box p {
        margin: 0;
        line-height: 1.4;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .col-md-6 {
            width: 100%; /* Full width on mobile */
            padding: 0;
            margin: 10px;
        }

        .icon-box {
            height: auto;
            min-height: 160px;
        }
    }
</style>
</head>

<body class="index-page">

<header><div>

<header id="header" class="header d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xll position-relative d-flex align-items-center">

        <a href="index.php" class="logo d-flex align-items-center me-auto">
            <img src="dashboard/icon.png" alt="">
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

<main class="main">

  <section id="hero" class="hero section">

    <div class="container">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5" data-aos="zoom-out">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h3 class="display-3 fw-bold lh-1 mb-3">Ваш лучший клиент для Minecraft. (DLC)</h3>
          <p class="lead" style="font-size: 16px;">/WWW coding idk ukm4ks.</p>
          <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
            <a href="login.php" class="btn-get-started">Купить<i class="bi bi-arrow-right"></i></a>
            <a href="https://t.me/lumia_cc" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play"></i><span>telegram channel</span></a>
          </div>
        </div>
        <div class="col-10 col-sm-8 col-lg-6 d-none d-md-block">
          <img src="dashboard/icon.png" class="d-block mx-lg-auto img-fluid animated" loading="lazy" width="400">
        </div>
      </div>
    </div>

  </section>





  <section id="alt-features" class="alt-features section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Наши преимущества</h2>
            <p>Здесь кратко описаны наши преимущества<br></p>
        </div>

        <div class="row gy-5">
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="features-wrapper">
                    <!-- Feature boxes will go here -->
                    <div class="col-md-6 icon-box">
                        <div class="feature-icon">
                            <img src="img/1.png" alt="Simple Installation" class="feature-img">
                        </div>
                        <div>
                            <h4>Простая установка</h4>
                            <p>Мы даем полный пакет инструкций для установки нашего клиента</p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box">
                        <div class="feature-icon">
                            <img src="img/2.png" alt="Interactive" class="feature-img">
                        </div>
                        <div>
                            <h4>Интерактивность</h4>
                            <p>Клиент можно использовать везде, ведь благодаря обширности его настроек, вы можете играть как угодно, и где угодно</p>
                        </div>
                    </div>

                    <div class="col-md-6 icon-box">
                        <div class="feature-icon">
                            <img src="img/3.png" alt="Reliability" class="feature-img">
                        </div>
                        <div>
                            <h4>Надёжность</h4>
                            <p>Наш клиент максимально защищён от взломов, кряков, а так же постоянно обновляется</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <section id="faq" class="faq section">

    <div class="container section-title" data-aos="fade-up">
      <h2>F.A.Q</h2>
      <p>Часто задаваемые вопросы</p>

    <div class="container">

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="faq-container">

            <div class="faq-item">
              <h3>Как быстро я получу свою подписку и смогу играть?</h3>
              <div class="faq-content">
                <p>После оплаты вы автоматически получаете доступ и можно уже сразу играть.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <div class="faq-item">
              <h3>Какие проекты поддерживает ваш клиент?</h3>
              <div class="faq-content">
                <p>Мы сейчас стараемся поддерживать все проекты но в частности это FunTime, HollyWorld, ReallyWorld! Хотим отметить что наш клиент подходит и на другие сервера.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">

            <div class="faq-item">
              <h3>Оплата происходит единоразово?</h3>
              <div class="faq-content">
                <p>Да, оплата происходит одним платежом, вы получаете конкретное количество дней игры сколько вы и выбирали. Доплачивать ничего не нужно.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <div class="faq-item">
              <h3>Где находится поддержка?</h3>
              <div class="faq-content">
                <p>Вся поддержка осуществляется на нашем сервере Discord.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

          </div>

        </div>

      </div>

    </div>
    </div>

  </section>

</main>

<footer><div>

<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.php" class="d-flex align-items-center">

                    <!--<img src="dashboard/icon.png"class="px-2" alt="" width="50px;"!-->

                    <span>Lumia</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>ukm4ks pidr</p>
                    <p>$$$$$$$$$$$$$$$$$$$$.</p>
                    <p class="mt-3"><strong>Email: ssyiuo@gmail.com </strong><span></span></p>
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
                    <a href="https://www.youtube.com/@ssyiuo" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://t.me/lumia_cc" target="_blank"><i class="bi bi-telegram"></i></a>
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
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/php-email-form/validate.js"></script>
<script src="vendor/aos/aos.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/purecounter/purecounter_vanilla.js"></script>
<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>

<script>

  document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && (event.key === 's' || event.key === 'S')) {
      event.preventDefault();
     }
  });

  document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
   });


</script>

<script src="js/main.js"></script>

</body>


<!-- Mirrored from excellentclient.pw/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 07:06:06 GMT -->
</html>
