<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 20:26:01
         compiled from "/home/estil450/public_html/application/views/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105386025551076d90396f9-61083473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1426115679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105386025551076d90396f9-61083473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'web_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551076d9119ca2_03826002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551076d9119ca2_03826002')) {function content_551076d9119ca2_03826002($_smarty_tpl) {?>
<!-- FOOTER  -->

<?php echo $_smarty_tpl->getSubTemplate ("atendimento_online.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<footer class="footer ">
    <div class="container ">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/termos-servicos">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <!--<li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>-->
                    <li><a href="https://www.facebook.com/estilocarioca" target="blank"><b class="entypo-facebook"></b></a></li>
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><b class="entypo-instagrem"></b></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="">
                    <div class="form-row">
                        <input name="nome_newsletter_2" id="nome" type="text" class="form-control" placeholder="Seu nome" required>
                    </div>
                    <div class="form-row">
                        <input name="email_newsletter_2" id="email" type="text" class="form-control" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    <div id="erro_newsletter_2"> </div>
                </form>
            </div>
        </div>
        <hr>
        
        
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/bandeiras.png" alt=""/>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <p class="copy">Desenvolvido por <span id="dl"></span></p>
                <script type="text/javascript">
                    var _dl = _dl || {};
                    _dl.width = "80";
                    _dl.color = "gray";
                    (function () {
                        var a = document.createElement("script");
                        a.type = "text/javascript";
                        a.async = !0;
                        a.src = "//static.designlab.com.br/js/bydl.js";
                        var b = document.getElementsByTagName("script")[0];
                        b.parentNode.insertBefore(a, b)
                    })();
                </script>
            </div>
                    
        </div>
                <hr>
                    
                    <div class="row footer-content text-center">
            <p style="line-height: 1.8em;font-size: 1.2rem;">
                <strong>RMGSPORT COMERCIO EIRELI - ME</strong>
                <br>CNPJ: 21.468.076/0001-16
                <br>&copy; Todos os direitos reservados - Rua Gazzi de Sá, nº17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210 
                <br>Atendimento ao cliente: rodrigo@estilocarioca.com.br - 21 3326.1986
            </p>
        </div>
    </div>
</footer>                

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/funcoes.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/mustache.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/scripts.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/joker.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/default.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/sweet-alert.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/stickyfloat.js"></script>
 <script language="javascript"> jQuery('.checkout-panel-2').stickyfloat({ duration: 0, easing:"linear",   startOffset: 60,   }); </script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.3.0/es5-shim.js'></script>



</body>
</html><?php }} ?>
