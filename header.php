<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
    <title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;900&display=swap" rel="stylesheet">
    <!-- swipercss -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
wp_deregister_script('jquery');
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0JY17WQ8KJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0JY17WQ8KJ');
</script>

</head>

<body <?php body_class (); ?>>
    <?php wp_head(); ?>

    <div class="wrapper">
        <!-- wrapper start ▼ -->
        <header id="header" class="header">
            <?php if ( is_home() || is_front_page() ): //トップページ ?>
            <h1 class="title-heading">
                <img src="<?php echo esc_url(get_theme_file_uri('images/header-main.svg')); ?>" alt="初味寿司　本店">
            </h1>
            <!-- スライダーのコンテナ部分 -->
            <div class="swiper-container">
                <!-- スライダーのラッパー部分 -->
                <ul class="swiper-wrapper">
                    <!-- スライダー本体 -->
                    <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/slide01.jpg')); ?>"
                    alt=""></li>
                    <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/slide02.jpg')); ?>" alt=""></li>
                    <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/slide03.jpg')); ?>" alt=""></li>
                    <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/slide04.jpg')); ?>" alt=""></li>
                </ul>
            </div>
            <?php elseif (is_page('information')): // 店舗情報トップ ?>
            <div class="video-wrapper">
               <div class="video-filter"></div>
                <video src="<?php echo get_template_directory_uri(); ?>/images/hatumi-video2.mp4" playsinline autoplay loop muted>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/slide01.jpg')); ?>" alt="placeholder">
                </video>
            </div>
            <?php elseif (is_page('menu')): //お品書きトップ ?>
            <h1 class="title-heading">
                <img src="<?php echo esc_url(get_theme_file_uri('images/header-main.svg')); ?>" alt="初味寿司　本店">
            </h1>
            <img src="<?php echo esc_url(get_theme_file_uri('images/menu-top.jpg')); ?>" alt="寿司盛り合わせ" class="header-img">
            <?php elseif (is_page('event')): //会食や法事トップ ?>
            <h1 class="title-heading">
                <img src="<?php echo esc_url(get_theme_file_uri('images/header-main.svg')); ?>" alt="初味寿司　本店">
            </h1>
            <div class="swiper-container">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/event-top1.jpg')); ?>" alt=""></li>
                    <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/event-top2.jpg')); ?>" alt=""></li>
                </ul>
            </div>
            <?php else: //その他 ?>
            <img src="<?php echo esc_url(get_theme_file_uri('images/other1.jpg')); ?>" alt="">
            <?php endif; ?>
        </header>

        <div class="container-fluid d-none d-xl-block nav-box">
            <div class="row">
                <nav class="navigation">
                    <ul class="nav nav-justified">
                        <li class="nav-item">
                            <a class="nav-link-logo" href="<?php echo esc_url(home_url('/')); ?>">
                                <img class="logo" src="<?php echo esc_url(get_theme_file_uri('images/logo-white.png')); ?>" alt="ブランド">
                            </a>
                        </li>
                        <?php if(is_home() || is_front_page() ): //トップ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#fav-article">本日のおすすめ<span></span></a>
                        </li>
                        <?php else : //トップ以外?>
                        <li class="nav-item">
                            <a href="<?php echo esc_url(home_url('/')) ?>" class="nav-link">HOME</a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('information')); ?>">店舗情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('menu')); ?>">メニュー</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('event')); ?>">会食や法事など</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/hatumisusi/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('images/facebook.png')); ?>" alt="facebook"></a>
                            <a href="https://www.instagram.com/hatumisusi/" target="_blank" class="nav-link">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/instagram.png')); ?>" alt="instagram">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- 予約ボタン -->
        <div id="reserve" class="reserve"><a href="https://airrsv.net/hatumisushi/calendar" target="_blank">ご予約</a></div>
        <div class="d-block d-xl-none">
            <a class="menu">
                <span class="menu-line menu-line-top"></span>
                <span class="menu-line menu-line-center"></span>
                <span class="menu-line menu-line-bottom"></span>
            </a>
            <nav class="container-fluid navigation-fluid hide">
                <div class="row nav-wrap">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 nav-list">
                        <ul class="nav-menu">
                           <?php if(is_home() || is_front_page() ): //トップ ?>
                            <li class="nav-menu-item">
                                <a href="<?php echo esc_url(home_url('#fav-article')); ?>">本日のおすすめ</a>
                            </li>
                            <?php else: //それ以外 ?>
                            <li class="nav-menu-item">
                                <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-menu-item">
                                <a href="<?php echo esc_url(home_url('information')); ?>">店舗情報</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="<?php echo esc_url(home_url('menu')); ?>">メニュー</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="<?php echo esc_url(home_url('event')); ?>">会食や法事など</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <a class="nav-logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="logo-lg" src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="ブランド">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
