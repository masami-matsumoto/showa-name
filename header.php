<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php echo wp_get_document_title(); ?></title>
<meta name="description" content="昭和ネームプレート株式会社は、埼玉県越谷市蒲生にある、シルク印刷　シルクスクリーン印刷　オフセット印刷　シール印刷　アルマイト印刷　プレス加工　中心の印刷会社になります。　自社工場で製造・検査・出荷している為、短納期・低コストでの製造を実現。蒲生工場　レイクタウン工場と２か所に工場を持ち設備も充実しています。ISO９００１　エコアクション２１　UL、CSA規格品認定工場　として、品質・環境に特化した工場です。各種材料も取り揃えております。">

<!-- fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
<!-- Favicons Generated with favicon.il.ly -->
<link rel="icon" sizes="16x16 32x32 48x48 64x64" href="<?php echo get_template_directory_uri(); ?>favicon.ico"/>
<!--[if IE]>
<link rel="shortcut icon" href="favicon.ico"/>
<![endif]--> 
<!-- Optional: Android & iPhone-->
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-152.png"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/drawer.min.css">
<!-- Optional: IE10 Tile.-->
<meta name="msapplication-TileColor" content="#FFFFFF"/>
<meta name="msapplication-TileImage" content="favicon/favicon-144.png"/>
<!-- Optional: ipads, androids, iphones, ...-->
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-152.png"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-144.png"/>
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-120.png"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-114.png"/>
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-72.png"/>
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-57.png"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/lobster-two:n4:default;roboto:n4:default;courier-prime:n4:default.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="header">
    <div> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="昭和ネームプレート" width="255" height="45" class="global_header-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-s.png" width="54" height="45" alt="logo" class="global_header-logo_s"></a> </div>
    <div class="openbtn"><span></span><span></span><span></span></div>
    <nav id="g-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'place_global',
          'container' => false,
        )
      );
      ?>
    </nav>
  </div>
</header>
