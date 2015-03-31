<header id="header" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="header-bar"></div>
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="hamburger"><span></span></a>
            <a class="brand" href="/{$language}/">
                <img src="https://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a class="face" href="https://www.facebook.com/estilocarioca">
                        <b class="entypo-facebook"></b>
                    </a>
                    <a class="insta" href="https://instagram.com/estilocarioca/">
                        <b class="entypo-instagrem"></b>
                    </a>
                    
                    <!--<a href="">
                        <i class="sprite sprite-twitter"></i>
                    </a>-->
                </li>
                <li class="navbar-search">
                    <a href="" class="search">
                        <i class="sprite sprite-search"></i>
                    </a>
                </li>
                {if $nome_logon == ""}
                    <li>
                        <a href="/{$language}/conta/login-cadastro/">
                            <i class="icon sprite sprite-user"></i>
                        </a>
                    </li>
                {else}
                    <li>
                        <a href="/{$language}/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a>
                    </li>
                    <li>
                        <a href="/{$language}/conta/sair" id="nav-login" style="display: inline-block;">Sair</a>
                    </li>   
                {/if}
                <li class="navbar-cart">
                    <a href="/{$language}/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">{if $total_produtos eq "" }0{else}{$total_produtos}{/if}</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li {if $page eq "index"} class="active"{/if}>
                    <a href="/{$language}/">Home</a>
                </li>
                <li {if $page eq "quem_somos"} class="active"{/if}>
                    <a href="/{$language}/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li {if $page eq "junior"} class="active"{/if}>
                    <a href="/{$language}/junior/">Junior</a>
                </li>
                <li {if $page eq "nilton-santos"} class="active"{/if}>
                    <a href="/{$language}/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>  