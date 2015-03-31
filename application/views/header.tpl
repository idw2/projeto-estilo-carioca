<!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>{$title}</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

{*                      <link rel="stylesheet" href="{$web_files}/css/joker.css?v=2"/>*}
        <link rel="shortcut icon" href="/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="{$web_files}/css/sweet-alert.css?v=2"/>
        <link rel="stylesheet" href="//www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">

{*        <script src="/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>*}
        <link rel="stylesheet" href="{$web_files}/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <style>

            .sugestao a  { font-size: 16px; display: block; background: #f4f4f4 !important; color:#1f3c8a !important; height: 100% !important; padding: 15px !important;margin-top: 0.3em !important; width: 100% !important;  }
            .sugestao a:hover { font-size: 16px; background: #1f3c8a !important; text-decoration: none; color:#fff !important; height: 100% !important; padding: 15px  !important; margin-top: 0.3em !important; width: 100% !important;  }


            @font-face {
                font-family: helveticaneue;
                src: local('HelveticaNeueLTStd-UltLt.otf'), url('HelveticaNeueLTStd-UltLt.otf');
            }

            body, .font-default, .footer-title{
                font-family: helveticaneue, Helvetica, sans-serif !important;
            }

            .footer-title{
                font-weight: 600 !important;
                color: #293751 !important;
            }

            body{
                line-height: 1.90rem !important;
            }




            .title-tag{
                background: #8795ae !important;
            }

            .theme-default .section-title3 > h2{
                box-shadow: 0 2px #8795ae !important;
            }

        </style>
        <!--[if IE 8]>
        <link rel="stylesheet" href="//www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>

        <script>
            if(document.getElementById("myTab") != null){
                $('#myTab a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                });
            }
        </script>

        {if $og_title != ""}<meta property="og:title" content="{$og_title}" />{/if}
        {if $og_type != ""}<meta property="og:type" content="{$og_type}" />{/if}
        {if $og_site_name != ""}<meta property="og:site_name" content="{$og_site_name}" />{/if}
        {if $og_descripition != ""}<meta property="og:description" content="{$og_descripition}" />{/if}
        {if $og_email != ""}<meta property="og:email" content="{$og_email}"/>{/if}
        {if $og_phone_number != ""}<meta property="og:phone_number" content="{$og_phone_number}"/>{/if}
        {if $og_street_address != ""}<meta property="og:street-address" content="{$og_street_address}"/>{/if}
        {if $og_locality != ""}<meta property="og:locality" content="{$og_locality}"/>{/if}
        {if $og_region != ""}<meta property="og:region" content="{$og_region}"/>{/if}
        {if $og_country_name != ""}<meta property="og:country-name" content="{$og_country_name}"/>{/if}
        {if $og_postal_code != ""}<meta property="og:postal-code" content="{$og_postal_code}"/>{/if}
    </head>
    <body class="theme-default ">

        <div class="search-popup">
            <div class="search-popup-out popup-close">
                <div class="search-popup-inner">
                    <div class="search-popup-container">
                        <div class="relative">
                            <form class="form search-popup-form" role="search" action="/{$language}/novos-produtos" method="post">
                                <input type="search" placeholder="Buscar" name="search" class="input" autocomplete="off">
                                <button type="submit"><i class="sprite sprite-search"></i></button>

                            </form>
                            <div class="search-sugestao"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="stt_logado_print">
            {include file="top.tpl"}
        </section>
