
<!-- FOOTER  -->

{include file="atendimento_online.tpl"}

<footer class="footer ">
    <div class="container">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="/{$language}/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/{$language}/conta/login-cadastro/">Login e Cadastro</a></li>
                    <li><a href="/{$language}/informacoes/quem-somos">A Estilo Carioca</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/{$language}/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/{$language}/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/{$language}/informacoes/termos-servicos">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <!--<li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>-->
                    <li><a href="tel:+5521981440644" target="blank" title="21 98144 0644"><img width="25px" src="https://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/whatsapp.png"</a></li>
                   
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><img width="25px" src="https://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/instagram.png"</a></a></li>

                <li><a href="https://www.facebook.com/estilocarioca" target="blank"><img width="25px" src="https://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/facebook.png"</a></a></li>
                
                </ul>
               
            </div>
            <div class="col-sm-6 col-md-3">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="">
                    <div class="form-row">
                        <input name="nome" id="nome" type="text" class="form-control" placeholder="Seu nome" required>
                    </div>
                    <div class="form-row">
                        <input name="email" id="email" type="text" class="form-control" placeholder="Seu e-mail" required>
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
                <img src="{$web_files}/img/bandeiras.png" alt=""/>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
              <p class="copy">Desenvolvido por <a href='http://designlab.com.br/' target="_blank"  style='margin-left: 2px;'><img src='{$web_files}/img/assets/dl.png' width="70"></a></p>
                <hr>
            </div>
                    
        </div>
                    
                    <div class="row footer-content text-center">
            <p style="line-height: 1.8em;font-size: 1.2rem;">
                <strong>RMGSPORT COMERCIO EIRELI - ME</strong>
                <br>CNPJ: 21.468.076/0001-16
                <br>&copy; Todos os direitos reservados - Rua Gazzi de Sá, nº17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210 
                <br>Atendimento ao cliente: suporte@estilocarioca.com.br
            </p>
        </div>
    </div>
</footer>                

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="{$web_files}/js/funcoes.js"></script>
<script src="/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="/application/template/estilocarioca/assets/js/plugins/mustache.min.js"></script>
<script src="/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="/application/template/estilocarioca/assets/js/scripts.js"></script>
<script language="javascript" src="{$web_files}/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="{$web_files}/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="{$web_files}/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="{$web_files}/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="{$web_files}/js/joker.js"></script>
<script language="javascript" src="{$web_files}/js/default.js"></script>
<script language="javascript" src="{$web_files}/js/sweet-alert.js"></script>
<script language="javascript" src="{$web_files}/js/stickyfloat.js"></script>
 <script language="javascript"> jQuery('.checkout-panel-2').stickyfloat({ duration: 0, easing:"linear",   startOffset: 60,   }); </script>
<script src='//cdnjs.cloudflare.com/ajax/libs/es5-shim/2.3.0/es5-shim.js'></script>



</body>
</html>