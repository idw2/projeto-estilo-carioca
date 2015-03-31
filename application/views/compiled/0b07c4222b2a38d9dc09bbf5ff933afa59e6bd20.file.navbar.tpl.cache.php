<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:19:25
         compiled from "/home/maria951/public_html/homolog/application/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11304106055460d77d55fe21-68490998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b07c4222b2a38d9dc09bbf5ff933afa59e6bd20' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/navbar.tpl',
      1 => 1415221960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11304106055460d77d55fe21-68490998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d77d60af37_08531496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d77d60af37_08531496')) {function content_5460d77d60af37_08531496($_smarty_tpl) {?><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="index") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">Home</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="aneis") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/aneis/">Anéis</a></li>            
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="brincos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/brincos/">Brincos</a></li>           
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="colares") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/colares/">Colares</a></li>           
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="pulseiras") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pulseiras/">Pulseiras</a></li>                       
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="conjuntos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conjuntos/">Conjuntos</a></li>                       
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="promocoes") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/promocoes/">Promoções</a></li>                       

    </ul>
    <div style="position: relative">
        <form class="navbar-form pull-right search-wrap" role="search" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/novos-produtos" method="post">
            <input type="search" name="search" id="search" class="form-control" placeholder="BUSCAR" autocomplete="off"/>
            <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
        </form>  
        <div class="sugestao"> </div>
    </div>
    <style>
        .sugestao{
            position: absolute;
            background: #fff;
            height: auto;
            right: 0;
            top: 40px;
            width: auto;
            min-width: 250px;
            /*padding: 0.5%;*/
            text-align: left;
            z-index: 500;
            /*max-height: 200px;
            overflow-x: auto;*/
            box-shadow: 0 1px 2px rgba(0,0,0,.2);
        }
    </style>
</div><?php }} ?>
