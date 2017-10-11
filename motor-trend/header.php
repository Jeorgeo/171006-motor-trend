<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package motor-trend
 */

?>
<!DOCTYPE html>
<html lang="ru"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/css.css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style>
  <!-- Pages tittle ============================================================================ -->
  <title>Мотор-колесо Дуюнова. Solarmotors - разработка и производство самых эффективных асинхронных двигателей в мире</title>
  <!-- Necessary pages settings ================================================================ -->
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=yes, width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- SEO basic pages settings ================================================================ -->
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="мотор-колесо Дуюнова, обмотка славянка, асинхронный двигатель Дуюнова">
  <meta name="description" content="Мотор-колесо Дуюнова. Стань участником уникального инвестиционного проекта. Solarmotors - разработка и производство самых эффективных асинхронных двигателей в мире.">
  <!-- SEO advanced pages settings ============================================================= -->
  <meta property="og:url" content="https://www.motor-trend.ru">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Мотор-колесо Дуюнова. Solarmotors - разработка и производство самых эффективных асинхронных двигателей в мире">
  <meta property="og:image" content="https://https://www.motor-trend.ru/img/og-image_1200x1200.png">
  <meta property="og:site_name" content="Мотор-колесо Дуюнова. Технологии нового поколения.">
  <meta property="og:description" content="Мотор-колесо Дуюнова. Стань участником уникального инвестиционного проекта. Solarmotors - разработка и производство самых эффективных асинхронных двигателей в мире.">
  <!-- Favicon ================================================================================= -->
  <link rel="icon" type="img/png" href="http://solargroup.pro/img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="img/png" href="http://solargroup.pro/img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="http://solargroup.pro/img/favicons/apple-touch-icon-152x152.png" sizes="152x152">
  <!-- Styles ================================================================================== -->

  <!--link rel="stylesheet" href="css/modify.css"/ --><!-- Быстрые правки и дополнения до их переноса в .less -->
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/custom.css" rel="stylesheet">
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107562648-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107562648-1');
  setTimeout("ga('send','event','Engaged users','More than 15 seconds')",15000);
</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46156305 = new Ya.Metrika({ id:46156305, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46156305" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<style type="text/css">/* cyrillic-ext */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 100;
src: local('Roboto Thin'), local('Roboto-Thin'), url(https://fonts.gstatic.com/s/roboto/v16/ty9dfvLAziwdqQ2dHoyjphTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 100;
src: local('Roboto Thin'), local('Roboto-Thin'), url(https://fonts.gstatic.com/s/roboto/v16/frNV30OaYdlFRtH2VnZZdhTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* cyrillic-ext */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 300;
src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v16/0eC6fl06luXEYWpBSJvXCBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 300;
src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v16/Fl4y0QdOxyyTHEGMXX8kcRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* latin */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 300;
src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v16/Hgo13k-tfSpn0qi1SFdUfVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* cyrillic-ext */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 400;
src: local(lt-Roboto), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 400;
src: local(lt-Roboto), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* latin */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 400;
src: local(lt-Roboto), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* cyrillic-ext */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 500;
src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/ZLqKeelYbATG60EpZBSDyxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 500;
src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/oHi30kwQWvpCWqAhzHcCSBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* latin-ext */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 500;
src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/oOeFwZNlrTefzLYmlVV1UBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 500;
src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v16/RxZJdnzeo3R5zSexge8UUVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* cyrillic-ext */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 700;
src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/77FXFjRbGzN4aCrSFhlh3hJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 700;
src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/isZ-wbCXNKAbnjo6_TwHThJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* latin */
@font-face {
font-family: lt-Roboto;
font-style: normal;
font-weight: 700;
src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
</style>

<body class="site-body">
<!--[if lte IE 9]>
<div class="stop-modal">
  <div class="stop-modal__inn">
    <img class="stop-modal__img" src="img/old-browsers.jpg" alt="Logo">
    <div class="stop-modal__txt">
      <b>Вы используете очень <strong>устаревший</strong> браузер, котороый не обеспечивает безошибочную
        работу современных сайтов</b><br> Пожалуйста,<br> <a href="http://browsehappy.com" rel="nofollow">обновите ваш браузер</a><br>
      для получения возможности полноценно пользоваться интернетом, миллионы людей уже давно сделали это
    </div>
  </div>
</div>
<![endif]-->
<noscript>
  <div class="stop-modal">
    <div class="stop-modal__inn">
      <img class="stop-modal__img" src="<?php bloginfo('template_url'); ?>/img/no-javascript.jpg" alt="JavaScript">
      <div class="stop-modal__txt">
        <strong>Похоже, что JavaScript отключен в вашем браузере.</strong><br>Вы должны включить JavaScript,<br>
        в настройках браузера, для того, чтобы полноценно пользоваться интернетом в общем<br> и нашим сайтом в частности.
      </div>
    </div>
  </div>
</noscript>

<div class="preloader is-off" id="preloader">

</div>


<div class="site-wrapper" id="site-wrapper">
    <!-- HEADER ================================================================ -->
<header class="site-header" id="site-header">
  <div class="sh-top">
    <div class="container sh-top__row">
      <div class="sh-top__col-lt">
        <div class="sh-logo">
          <img class="sh-logo__img" src="<?php bloginfo('template_url'); ?>/img/logo_duyunov.svg" alt="Solarmotors logo">
          <a class="sh-logo__link" href="https://www.motor-trend.ru" title="На главную"></a>
        </div>
        <div class="sh-lead">
          <h2 class="sh-lead__title">Мотор-колесо Дуюнова</h2>
          <div class="sh-lead__note">Технологии нового поколения</div>
        </div>
      </div>
      <div class="sh-top__col-rt">
        <div class="sh-info">
          <a class="sh-info__phone" href="#"></a>
          <div class="sh-info__addr">Зеленоград, Панфиловский проспект 10</div>
        </div>
      </div>
    </div>
  </div><!-- END sh-top -->

  <div class="sh-btm">
    <div class="container sh-btm__row">
      <div class="sh-btm__modal js-mobmenu-toggle" id="js-mobmodal"></div>
      <div class="sh-btm__col-lt" id="js-mobmenu">
        <ul class="sh-menu">
          <li class="sh-menu__item"><a class="sh-menu__link js-scroll-to" href="#technology">О технологии</a></li>
          <li class="sh-menu__item"><a class="sh-menu__link js-scroll-to" href="#invest">Условия инвестирования</a></li>
          <li class="sh-menu__item"><a class="sh-menu__link js-scroll-to" href="#company">О компании</a></li>
        </ul>
        <div class="sh-mobinfo">
          <!-- a class="sh-mobinfo__phone" href="tel:+71233333333">8 (123) 333 33 33</a -->
          <!-- a class="sh-mobinfo__mail" href="mailto:info@solarmotors.com">info@solarmotors.com</a -->
          <div class="sh-mobinfo__addr">Зеленоград, Панфиловский проспект 10</div>
          <ul class="sonet sh-mobinfo__sonet">
            <li class="sonet__item"><a class="sonet__link icon-fb" target="_blank" href="https://www.facebook.com/groups/1186525781358249"></a></li>
            <li class="sonet__item"><a class="sonet__link icon-vk" target="_blank" href="https://vk.com/duyunov_official"></a></li>
            <li class="sonet__item"><a class="sonet__link icon-gp" target="_blank" href="https://plus.google.com/u/1/102494448651981142020"></a></li>
            <li class="sonet__item"><a class="sonet__link icon-tw" target="_blank" href="https://twitter.com/DDuunov"></a></li>
            <li class="sonet__item"><a class="sonet__link icon-ok" target="_blank" href="https://ok.ru/group/54547689242729"></a></li>
            <li class="sonet__item"><a class="sonet__link icon-yt" target="_blank" href="https://www.youtube.com/channel/UCHrtI4vjbUChbFPrammi3lg/videos"></a></li>
            <li class="sonet__item"><a class="sonet__link icon-in" target="_blank" href="https://www.instagram.com/asinhronnyedvigateliduunova"></a></li>
          </ul>
        </div>
      </div>
      <div class="sh-btm__mob">
        <a class="sh-btm__mob-btn mobmenu js-mobmenu-toggle" role="button">
          <div class="mobmenu__inn">
            <span class="mobmenu__top"></span><span class="mobmenu__mid"></span><span class="mobmenu__btm"></span>
          </div>
        </a>
      </div>
      <div class="sh-btm__col-rt">
        <div class="sh-login">
          <a href="https://reg.solargroup.pro/user/login" class="sh-login__btn" target="_blank" onclick="yaCounter46156305.reachGoal('1'); return true;"><span>Перейти к регистрации на официальный сайт проекта</span></a>
        </div>
      </div>
    </div>
  </div><!-- END sh-btm -->
</header><!-- END site-header -->
