<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

<!-- Bootstrap4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;900&display=swap" rel="stylesheet">
<!-- swipercss -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<meta name="google-site-verification" content="pfS2MJ3FKZwjaewn5tDTRd3EeSgwWEDA033TYvl6a70" />

<?php
wp_deregister_script('jquery');
?>
</head>
<body <?php body_class (); ?>>
<?php wp_head(); ?>
    
<div class="wrapper"><!-- wrapper start ▼ -->
<header id="header" class="header">
   
   <h1 class="slide-heading">
       <img src="<?php echo esc_url(get_theme_file_uri('images/header-main.png')); ?>" alt="">
   </h1>
   <!-- スライダーのコンテナ部分 -->
   <div class="swiper-container">
      <!-- スライダーのラッパー部分 -->
       <ul class="swiper-wrapper">
          <!-- スライダー本体 -->
           <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/slide03_1.jpg')); ?>" alt="" width="100%"></li>
           <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/slide02_02.jpg')); ?>" alt=""></li>
       </ul>
       <!-- スライドのページネイション -->
       <div class="swiper-pagination"></div>
       <!-- ナビゲーションボタン -->
       <div class="swiper-button-prev"></div>
       <div class="swiper-button-next"></div>
       <!-- スライドのスクロール -->
       <div class="swiper-scrollbar"></div>
   </div>

</header>
    
    <div class="container-fluid d-none d-xl-block nav-box">
        <div class="row">
            <nav class="navigation">
                <ul class="nav nav-justified">
                    <li class="nav-item">
                        <a class="nav-link-logo" href="#">
                            <img class="logo" src="<?php echo esc_url(get_theme_file_uri('images/logo-white.png')); ?>" alt="ブランド">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">本日のおすすめ<span></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(home_url('infomation')) ?>">店舗情報</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">メニュー</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">会食や法事など</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/facebook.png')); ?>" alt="facebook"></a>
                        <a href="#" class="nav-link">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/instagram.png')); ?>" alt="instagram">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
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
                        <li class="nav-menu-item">
                            <a href="#">初味寿司について</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">メニュー</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">予約</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">宴会</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">アクセス</a>
                        </li>
                    </ul>
                </div>    
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a class="nav-logo" href="#">
                        <img class="logo-lg" src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="ブランド">
                    </a>
                </div>
            </div>
        </nav>
    </div>