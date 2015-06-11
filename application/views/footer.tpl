
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
                    <li><a href="https://www.facebook.com/estilocarioca" target="blank"><i class="sprite sprite-facebook-2"></i></a></li>
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><i class="sprite sprite-instagram-2"></i></a></li>
                </ul>
                <div style='margin-top: -10px;'>
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="30.667px" height="30.667px" viewBox="0 0 30.667 30.667" style="fill: #A9A9A9; width: 22px; display: inline-block;vertical-align: middle;"
     xml:space="preserve">
                    <g>
                          <path d="M30.667,14.939c0,8.25-6.74,14.938-15.056,14.938c-2.639,0-5.118-0.675-7.276-1.857L0,30.667l2.717-8.017
                                c-1.37-2.25-2.159-4.892-2.159-7.712C0.559,6.688,7.297,0,15.613,0C23.928,0.002,30.667,6.689,30.667,14.939z M15.61,2.382
                                c-6.979,0-12.656,5.634-12.656,12.56c0,2.748,0.896,5.292,2.411,7.362l-1.58,4.663l4.862-1.545c2,1.312,4.393,2.076,6.963,2.076
                                c6.979,0,12.658-5.633,12.658-12.559C28.27,8.016,22.59,2.382,15.61,2.382z M23.214,18.38c-0.094-0.151-0.34-0.243-0.708-0.427
                                c-0.367-0.184-2.184-1.069-2.521-1.189c-0.34-0.123-0.586-0.185-0.832,0.182c-0.243,0.367-0.951,1.191-1.168,1.437
                                c-0.215,0.245-0.43,0.276-0.799,0.095c-0.369-0.186-1.559-0.57-2.969-1.817c-1.097-0.972-1.838-2.169-2.052-2.536
                                c-0.217-0.366-0.022-0.564,0.161-0.746c0.165-0.165,0.369-0.428,0.554-0.643c0.185-0.213,0.246-0.364,0.369-0.609
                                c0.121-0.245,0.06-0.458-0.031-0.643c-0.092-0.184-0.829-1.984-1.138-2.717c-0.307-0.732-0.614-0.611-0.83-0.611
                                c-0.215,0-0.461-0.03-0.707-0.03S9.897,8.215,9.56,8.582s-1.291,1.252-1.291,3.054c0,1.804,1.321,3.543,1.506,3.787
                                c0.186,0.243,2.554,4.062,6.305,5.528c3.753,1.465,3.753,0.976,4.429,0.914c0.678-0.062,2.184-0.885,2.49-1.739
                                C23.307,19.268,23.307,18.533,23.214,18.38z"/>
                    </g>
                  </svg>
                  <span style="font-weight: 300; font-family: 'Roboto Condensed', Helvetica, sans-serif;vertical-align: middle;margin-left: 4px;">21 98144 0644</span>
              </div>
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
                <br>Atendimento ao cliente: vendas@estilocarioca.com.br
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