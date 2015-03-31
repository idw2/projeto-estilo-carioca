<?php /*%%SmartyHeaderCode:1363006121544e913c9c0557-67937747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d17d1563ef4caf84b8a05681a9bc33db278253' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/programa_vantagens.tpl',
      1 => 1409581280,
      2 => 'file',
    ),
    '73de0111ee301fe0c7a0419067a6092ee8c2473b' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/header.tpl',
      1 => 1414431093,
      2 => 'file',
    ),
    '89191d4af7112164523e47456832e67e5aa51378' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/navbar.tpl',
      1 => 1412107046,
      2 => 'file',
    ),
    'e582154db7903ebcd42f80d3c4df27150912bdbe' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/logo.tpl',
      1 => 1414178488,
      2 => 'file',
    ),
    'f0007e1a8726954198693ec45edf0d82173b1411' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/tinymce_1.tpl',
      1 => 1414178733,
      2 => 'file',
    ),
    'b5516564ae08b3778b5b55911ea33638d41d12c5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363006121544e913c9c0557-67937747',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544e913ccf3f21_31781998',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e913ccf3f21_31781998')) {function content_544e913ccf3f21_31781998($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Programa de Vantagens</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="icon" type="image/vnd.microsoft.icon" href="/homolog/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/homolog/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/homolog/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/homolog/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/homolog/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/homolog/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/homolog/web-files/css/style.css"/>

        <script language="javascript" src="/homolog/web-files/js/funcoes.js"></script>
        <script language="javascript" src="/homolog/web-files/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="/homolog/web-files/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="/homolog/web-files/bootstrap/js/bootstrap.js"></script>
        <script language="javascript" src="/homolog/web-files/bootstrap/js/bootstrap-tooltip.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/homolog/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/homolog/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Upload -->
        <script type="text/javascript" src="/homolog/web-files/js/jquery.uploadfile.js"></script>
        <link rel="stylesheet" href="/homolog/web-files/css/uploadfile.css" type="text/css" media="screen" />
        <!-- JQuery UI -->
        <script type="text/javascript" src="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
        <link rel="stylesheet" href="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.css"/>
        <link rel="stylesheet" href="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.theme.css"/>
        <!-- Drag -->
        <script type="text/javascript" src="/homolog/web-files/js/jquery-sortable.js"></script>
        <!-- PLUGIN CROP -->
        <link rel="stylesheet" href="/homolog/web-files/crop/cropper.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/homolog/web-files/crop/cropper.js"></script>
        <script type="text/javascript" src="/homolog/web-files/js/highlight.min.js"></script>
        <script type="text/javascript" src="/homolog/web-files/js/jquery.tablednd.0.7.js"></script>
        <script type="text/javascript" src="/homolog/web-files/js/default.js"></script>

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>

            @font-face {
                font-family: Gotham-Black;
                src: url(/homolog/web-files/css/gotham/Gotham-Black.otf);
            }
            @font-face {
                font-family: Gotham-BlackIta;
                src: url(/homolog/web-files/css/gotham/Gotham-BlackIta.otf);
            }
            @font-face {
                font-family: Gotham-Bold;
                src: url(/homolog/web-files/css/gotham/Gotham-Bold.otf);
            }
            @font-face {
                font-family: Gotham-BoldIta;
                src: url(/homolog/web-files/css/gotham/Gotham-BoldIta.otf);
            }
            @font-face {
                font-family: Gotham-Book;
                src: url(/homolog/web-files/css/gotham/Gotham-Book.otf);
            }
            @font-face {
                font-family: Gotham-BookIta;
                src: url(/homolog/web-files/css/gotham/Gotham-BookIta.otf);
            }
            @font-face {
                font-family: Gotham-Light;
                src: url(/homolog/web-files/css/gotham/Gotham-Light.otf);
            }
            @font-face {
                font-family: Gotham-LightIta;
                src: url(/homolog/web-files/css/gotham/Gotham-LightIta.otf);
            }
            @font-face {
                font-family: Gotham-Medium;
                src: url(/homolog/web-files/css/gotham/Gotham-Medium.otf);
            }
            @font-face {
                font-family: Gotham-MediumIta;
                src: url(/homolog/web-files/css/gotham/Gotham-MediumIta.otf);
            }
            @font-face {
                font-family: Gotham-Thin;
                src: url(/homolog/web-files/css/gotham/Gotham-Thin.otf);
            }
            @font-face {
                font-family: Gotham-ThinIta;
                src: url(/homolog/web-files/css/gotham/Gotham-ThinIta.otf);
            }
            @font-face {
                font-family: Gotham-Ultra;
                src: url(/homolog/web-files/css/gotham/Gotham-Ultra.otf);
            }
            @font-face {
                font-family: Gotham-UltraIta;
                src: url(/homolog/web-files/css/gotham/Gotham-UltraIta.otf);
            }
            @font-face {
                font-family: Gotham-XLight;
                src: url(/homolog/web-files/css/gotham/Gotham-XLight.otf);
            }
            @font-face {
                font-family: Gotham-XLightIta;
                src: url(/homolog/web-files/css/gotham/Gotham-XLightIta.otf);
            }

            html,body{
                height: 100%;
            }

            .box-login{
                margin-top: 25%
            }
            .area-restrita{
                margin-bottom: 4%; 
                display: inline-block;
            }

            .panel-heading{
                color: #e9c92e; 
                font-family: "Gotham-Bold";
            }

            .nav > li > a:hover, .nav > li > a:focus {
                text-decoration: none;
                background-color: #e9c92e; 
                color: #395aa4;
            }

            .nav > li > a {
                position: relative; 
                display: block; 
                padding: 10px 15px; 
                color: #fff; 
                text-transform: uppercase; 
            }

            .nav > li.active > a{ 
                color: #395aa4; 
                background: #e9c92e; 
                text-transform: uppercase
            }

            .sidebar{
                position: absolute;
                top:0;
                bottom:0;
                left:0;
                width: 250px;
                background: #395aa4;
            }
            .content{
                position: absolute;
                top:0;
                bottom:0;
                left:250px;
                right: 0;
                background: #fff;
                padding: 0 15px;
            }

            .navbar-form .search-input{
                width: 250px;
            }

            .navbar-default {
                border: none !important; 
            }

            .x-label{
                color: #5d5d5d;
                padding: 1px 0;
            }

            .ico-default-trophy, .ico-default-dolar, .ico-default-heart, .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
                display: inline-block;
                width: 32px;
                height: 29px;
                border-radius: 50%;
                background: #e9c92e;
                cursor: pointer;
                color: #fff;
                text-align:  center;
                font-size: 14px;
                line-height: 26px;
                padding: 0 0 0 1px;

            }

            .ico-default-trash{  background: #58595A; }
            
            .ico-default-heart{ background: #EC8ED6; color: #fff;  border: none; }            
            .ico-default-heart i{ color: #fff; }            
            .ico-default-heart.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-heart.desative i{ color: #57574b; }
            
            .ico-default-eye{ background: #e9c92e; color: #fff;  border: none; }            
            .ico-default-eye i{ color: #fff; }            
            .ico-default-eye.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-eye.desative i{ color: #57574b; }
            
            .ico-default-dolar{ background: #81B4D1; color: #fff;  border: none; }            
            .ico-default-dolar i{ color: #fff; }            
            .ico-default-dolar.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-dolar.desative i{ color: #57574b; }
            
            .ico-default-trophy{ background: #D1819B; color: #fff;  border: none; }            
            .ico-default-trophy i{ color: #fff; }            
            .ico-default-trophy.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-trophy.desative i{ color: #57574b; }

            .ico-default-photo{
                background: #395aa4;                
            }

            .ico-default-edit{
                background: #18CAEC;
            }

            .ico-default-star{ background: #2ac364; color: #fff;  border: none; }            
            .ico-default-star i{ color: #fff; }            
            .ico-default-star.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-star.desative i{ color: #57574b; }

            .ico-default-eye a, .ico-default-trash a, .ico-default-photo a, .ico-default-edit a{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                text-decoration: none;
            } 

            .ico-default-trash.desative, .ico-default-photo.desative{
                background: #ad2138;
            }

            .hidex{
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                opacity: 0;
                margin-bottom: 0;
            }

            .myDragClass{
                background-color: #ecf6fc;
            } 
            .myDragClass.active{
                background-color: #333;
            }

            body{
                font-family: 'Gotham-Book' !important;
                font-size: 18px;
            }
            
            table{ font-size: 16px }

        </style>

    </head>
    <body>

<div class="sidebar">
    <nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" style="padding-bottom: 3%; background: #e25f66">
        <div class="panel-heading"><h4>Painel Administrativo</h4></div>
        <ul class="nav nav-stacked" style="font-size: 14px;">
            <li  class="" ><a href="/homolog/en/admin/welcome">Home</a></li>
                            <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="" ><a href="/homolog/en/produtos/produtos-lista">Lista</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/homolog/en/pedidos/pedidos-lista">Lista</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/homolog/en/informacoes/newsletter-lista">Lista</a></li>
                <div class="panel-heading"><h4>Atendentes</h4></div>
                <li  class="" ><a href="/homolog/en/admin/atendentes-lista">Lista</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/homolog/en/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/homolog/en/html/promocoes">Promoções</a></li>
                <li  class="active" ><a href="/homolog/en/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/homolog/en/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/homolog/en/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/homolog/en/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/homolog/en/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/homolog/en/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/homolog/en/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/homolog/en/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/homolog/en/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
                        <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/homolog/en/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/homolog/en/admin/logout">Sair</a></li>              
            
        </ul>     
    </div><!-- /.navbar-collapse -->
</nav>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <img class="area-restrita img-responsive center-block" src="/homolog/web-files/img/logo.png" alt="" border="0" title="" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/homolog/en/html/programa_vantagens" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Programa de Vantagens</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis fringilla pharetra. Integer viverra, massa non blandit tempus, erat lacus lobortis diam, a varius ante metus pellentesque leo. Sed a sodales nunc. Donec et posuere sem, a faucibus arcu. Phasellus nec justo in nibh pretium sollicitudin id ac quam. Nam pharetra mauris eget commodo hendrerit. Fusce pellentesque ac lectus sed dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis quis turpis sit amet nulla mattis facilisis eu ut diam. Pellentesque ut adipiscing dui. Quisque ultrices mollis lectus ut feugiat. Vestibulum vitae ipsum nisi.</p>
<p>Fusce scelerisque augue sit amet metus feugiat, eu euismod quam tristique. Mauris aliquet elit lectus, ac posuere turpis venenatis et. Cras commodo quis nibh nec dignissim. Nunc porta libero at lorem auctor feugiat. Vestibulum accumsan commodo tortor sit amet ullamcorper. Ut eu ultricies augue. Nam nec justo magna. Sed interdum lacus nec quam faucibus, in luctus odio vulputate. Duis sed mattis diam. In euismod non turpis non imperdiet.</p>
<p>Donec nec eros facilisis, vulputate sem in, scelerisque diam. Vestibulum convallis porta mauris et ornare. Ut sit amet porta nunc. Proin rutrum mattis purus auctor volutpat. Nunc facilisis commodo odio, at lobortis neque dictum ut. Vivamus ac pulvinar metus. Nulla non faucibus nisl, vitae laoreet lorem. Morbi et nisi ipsum. Duis ac felis ut ante feugiat gravida. Integer malesuada vitae justo sollicitudin vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent malesuada dignissim arcu vitae consequat. Maecenas ut turpis felis. Donec vel enim et leo porttitor sollicitudin. Integer pharetra risus dolor, sit amet consectetur massa ultrices quis. Suspendisse potenti.</p>
<p>Sed semper dignissim pellentesque. Nullam mattis lobortis mauris, ac ullamcorper dui dapibus et. Suspendisse volutpat bibendum orci, non dapibus sapien rhoncus eget. Aenean nec feugiat nisl. Morbi pretium lacus ac diam sodales, in semper enim rhoncus. Phasellus imperdiet ipsum eget aliquam lobortis. Etiam cursus, turpis aliquet tempor elementum, dolor libero eleifend velit, non congue sapien felis id magna. Vestibulum iaculis dui velit, eget dapibus eros ultrices et. Donec nec libero ac sem convallis faucibus.</p>
<p>Nulla eu lacinia dui. Nam porttitor convallis libero, ac tincidunt urna accumsan ut. Cras sit amet imperdiet est. Pellentesque porttitor malesuada leo vitae egestas. Sed eget magna vel mauris consequat imperdiet et ut est. Quisque adipiscing varius odio, vel sodales justo varius sit amet. Integer vitae adipiscing purus. In eu magna at justo hendrerit lacinia. Nulla consequat mi placerat ante mattis pulvinar. Duis bibendum, libero sit amet sollicitudin iaculis, ante eros dapibus nisi, in fringilla ante leo id neque. Donec vitae urna at quam commodo vestibulum. Proin ac sagittis massa. Aenean adipiscing lacus scelerisque porttitor vulputate.&nbsp;</p></textarea></p>
                <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

            </form>

        </div>
    </div>
</div>
<script type="text/javascript" src="/homolog/web-files/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

    tinyMCE.init({
        // General options

        mode: "textareas",
        theme: "advanced",
        plugins: "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        // Theme options

        theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location: "top",
        theme_advanced_toolbar_align: "left",
        theme_advanced_statusbar_location: "bottom",
        theme_advanced_resizing: true,
        // Skin options

        skin: "o2k7",
        skin_variant: "silver",
        // Example content CSS (should be your site CSS)

        content_css: "css/example.css",
        // Drop lists for link/image/media/template dialogs

        template_external_list_url: "js/template_list.js",
        external_link_list_url: "js/link_list.js",
        external_image_list_url: "js/image_list.js",
        media_external_list_url: "js/media_list.js",
        // Replace values for the template plugin

        template_replace_values: {
            username: "Some User",
            staffid: "991234"

        }

    });

</script>

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html><?php }} ?>
