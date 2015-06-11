<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:19:59
         compiled from "/home/maria951/public_html/novo/application/views/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2002455587544938bfd6bbe1-12281035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0731b73a1e7144101fd76a90427ad49520238e95' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/navbar.tpl',
      1 => 1412107046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002455587544938bfd6bbe1-12281035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'language' => 0,
    'papel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544938bfecb4d7_81335686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544938bfecb4d7_81335686')) {function content_544938bfecb4d7_81335686($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">

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
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="welcome") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a></li>
            <?php if ($_smarty_tpl->tpl_vars['papel']->value=="ADMINISTRADOR") {?>
                <div class="panel-heading"><h4>Produtos</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="produtos_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/produtos-lista">Lista</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="pedidos_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/pedidos-lista">Lista</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="newsletter_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/newsletter-lista">Lista</a></li>
                <div class="panel-heading"><h4>Atendentes</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="atendentes_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/atendentes-lista">Lista</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="quem_somos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/quem_somos">Quem somos</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="promocoes") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/promocoes">Promoções</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="programa_vantagens") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="programa_fidelidade") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="politica_privacidade") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/politica-privacidade">Política de Privacidade</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="termos_servicos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/termos-servicos">Termos de serviço</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="forma_pagamento") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="entrega_devolucao") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="procon_rj") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/procon-rj">PROCON-RJ</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="perguntas_frequentes") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="cuidados_produtos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
            <?php } else { ?>
                <div class="panel-heading"><h4>Status</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="meu_status") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/atendimento/meu-status">Meu status</a></li> 
                <div class="panel-heading"><h4>Atendimento</h4></div>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="meus_atendimentos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/atendimento/meus-atendimentos">Meus atendimentos</a></li> 
            <?php }?>
            <div class="panel-heading"><h4>Serviços</h4></div>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="alterar_senha") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar-senha">Alterar senha</a></li>              
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="logout") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout">Sair</a></li>              
            
        </ul>     
    </div><!-- /.navbar-collapse -->
</nav><?php }} ?>
