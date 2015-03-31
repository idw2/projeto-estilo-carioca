<?php
$seo = new SEO();
$page = $seo->get_slug();
$title = $seo->get_title();
$description = $seo->get_description();
$author = SEO::author;
?>
<!DOCTYPE html>
<html class="no-js">
    <head>

        <title><?php echo $title; ?></title>

        <?php
        assign_meta(array(
            'title' => $title,
            'description' => $description,
            'author' => $author
        ));
        ?>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" href="<?php echo assets('img/favicon.png?v=5'); ?>">

        <?php
        assign_css(array(
            'slick' => 'plugins/slick.css',
            'sweet-alert' => 'plugins/sweet-alert.css',
            'raty' => 'plugins/jquery.raty.css',
            'magnific-popup' => 'plugins/magnific-popup.css',
            'style' => 'style.css'
        ));
        assign_js(array(
            'modernizr' => 'modernizr.custom.js'
        ));
        ?>

        <!--[if IE 8]>
        <?php
        assign_css(array(
            'ie8' => 'ie8.css',
        ));
        assign_js(array(
            'respond' => 'respond.js'
        ));
        ?>
        <![endif]-->
        
        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>
    </head>
    <body>

        <header id="header" class="navbar navbar-fixed-top navbar-default" role="navigation">
            <div class="header-bar"></div>
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="hamburger"><span></span></a>
                    <a class="brand" href="<?php echo link_to(); ?>">
                        <img src="<?php echo assets('img/estilocarioca.png'); ?>" width="71" height="68" />
                    </a>
                </div>
                <nav class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?php echo link_to(); ?>">Home</a>
                        </li>
                        <li class="">
                            <a href="<?php echo link_to('sobre'); ?>">A Estilo Carioca</a>
                        </li>
                        <li class="">
                            <a href="<?php echo link_to('junior'); ?>">Junior</a>
                        </li>
                        <li class="">
                            <a href="<?php echo link_to('nilton-santos'); ?>">Nilton Santos</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbar-social">
                            <a href="">
                                <i class="sprite sprite-instagram"></i>
                            </a>
                            <a href="">
                                <i class="sprite sprite-facebook"></i>
                            </a>
                            <a href="">
                                <i class="sprite sprite-twitter"></i>
                            </a>
                        </li>
                        <li class="navbar-search">
                            <a href="" class="search">
                                <i class="sprite sprite-search"></i>
                            </a>
                            <form class="form" action="" method="get">
                                <input type="search" placeholder="Buscar" name="s" class="input">
                            </form>
                            <div class="sugestao" style="display: none;"></div>
                        </li>
                        <li class="navbar-cart">
                            <a href="<?php echo link_to('carrinho'); ?>">
                                <i class="icon sprite sprite-cart"></i>
                                <span class="value">10</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>