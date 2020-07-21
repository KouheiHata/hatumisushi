<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

<!-- Bootstrap4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- swiper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">

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
   
   <h2>大将が素材にこだわりぬいた
   季節の魚や素材を
   最高の状態で味わう</h2>
   <!-- スライダーのコンテナ部分 -->
   <div class="swiper-container">
      <!-- スライダーのラッパー部分 -->
       <ul class="swiper-wrapper">
          <!-- スライダー本体 -->
           <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/1.jpg')); ?>" alt=""></li>
           <li class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri('images/2.jpg')); ?>" alt=""></li>
       </ul>
       <!-- スライドのページネイション -->
       <div class="swiper-pagination"></div>
       <!-- ナビゲーションボタン -->
       <div class="swiper-button-prev"></div>
       <div class="swiper-button-next"></div>
       <!-- スライドのスクロール -->
       <div class="swiper-scrollbar"></div>
   </div>
<!-- トップへ戻るボタン -->
<div id="page_top" class="arrow"><a href="#"></a></div>
</header>
    
    <div class="container-fluid bg-white d-none d-xl-block nav-box">
        <div class="row">
            <nav class="navigation">
                <ul class="nav nav-justified">
                    <li class="nav-item">
                        <a class="nav-link-logo" href="#">
                            <img class="logo" src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="ブランド">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リンク</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リンク</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リンク</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リンク</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リンク</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リンク</a>
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
                            <a href="#">リンク</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">リンク</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">リンク</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">リンク</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">リンク</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">リンク</a>
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