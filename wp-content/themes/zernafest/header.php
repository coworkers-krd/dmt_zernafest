<!DOCTYPE html>
<html lang="Ru ru">
<head>
  <meta charset="utf-8">
  <meta content="ie=edge" http-equiv="x-ua-compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>ЗернаФест - Главное событие года о воспитании счастливых и успешных детей</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">

  <meta property="og:image" content="http://zernafest.ru/wp-content/themes/zernafest/img/promo/promo_bg1.jpg">
  <meta property="og:url" content="http://zernafest.ru/"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>

  <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/plugins/slick/slick.css' type='text/css' media='all' />
  <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/plugins/modal-video/modal-video.min.css' type='text/css' media='all' />
  <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/main.css?v=<?php echo date(U);?>' type='text/css' media='all' />
  <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo date(U);?>' type='text/css' media='all' />

  <?php wp_head(); ?>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">


  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TXTBQD7');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '25010881e1e54d6e7e6d98949475cf36');
</script>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXTBQD7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="preloader">
      <div class="preloader__inner">
        <ul class="preloader__list">
          <li class="preloader__item">1</li>
          <li class="preloader__item">2	</li>
          <li class="preloader__item">3</li>
          <li class="preloader__item">4</li>
          <li class="preloader__item">5</li>
          <li class="preloader__item">6</li>
          <li class="preloader__item">7</li>
          <li class="preloader__item">8</li>
          <li class="preloader__item">9</li>
          <li class="preloader__item">10</li>
          <li class="preloader__item">11</li>
          <li class="preloader__item">12</li>
          <li class="preloader__item">13</li>
          <li class="preloader__item">14</li>
          <li class="preloader__item">15</li>
        </ul>
      </div>
    </div>
    <div class="wrapper js-wrapper-preloader">
      <section class="promo" style="background-image: url(<?= wp_get_attachment_image_src(get_option('promo_photo'), full)[0];?>);">
        <header class="header">
          <button class="hamburger js-hamburger" type="button">
            <div class="hamburger__item"></div>
          </button>
          <div class="container container_header js-menu">
            <nav class="menu">
              <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="#mission">миссия</a></li>
                <li class="menu__item"><a class="menu__link" href="#speakers">спикеры</a></li>
                <li class="menu__item"><a class="menu__link" href="#price">стоимость</a></li>
                <li class="menu__item"><a class="menu__link" href="#where-will">где будет</a></li>
                <li class="menu__item"><a class="menu__link" href="#schedule">программа</a></li>
                <li class="menu__item"><a class="menu__link" href="#gallery">галерея</a></li>
              </ul>
            </nav>
            <div class="header__tel">
              <a class="header__tel-link" href="tel:+<?php $tel = get_option('contacts_tel1'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('contacts_tel1'); ?><br><span class="subtext">Бесплатно по СНГ</span></a>
              <a class="header__tel-link" href="tel:+<?php $tel = get_option('contacts_tel2'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('contacts_tel2'); ?><br><span class="subtext">Бесплатно весь мир</span></a>
            </div>
          </div>
        </header>