
<footer class="footer">
    <div class="container">
        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="">Acompanhe seu pedido</a></li>
                    <li><a href="">Minha conta</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="">Entre em contato</a></li>
                    <li><a href="">Trocas e devoluções</a></li>
                    <li><a href="">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>
                    <li><a href=""><i class="sprite sprite-facebook-2"></i></a></li>
                    <li><a href=""><i class="sprite sprite-instagram-2"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate>
                    <div class="form-row">
                        <input name="name" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="form-row">
                        <input name="email" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
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
    </div>
</footer>

<?php assign_js(array('jquery' => '//code.jquery.com/jquery-1.11.2.min.js'), true); ?>
<?php
assign_js(array(
    'slick' => 'plugins/slick.min.js',
    'raty' => 'plugins/jquery.raty.js',
    'underscore' => 'plugins/underscore-min.js',
    'magnigfic-popup' => 'plugins/jquery.magnific-popup.min.js',
    'scripts' => 'scripts.js'
));
?>

</body>
</html>