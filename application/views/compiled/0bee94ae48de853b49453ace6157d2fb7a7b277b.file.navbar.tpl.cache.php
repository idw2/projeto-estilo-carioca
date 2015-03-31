<?php /* Smarty version Smarty-3.1.19, created on 2015-02-10 19:44:12
         compiled from "/home/estil450/public_html/application/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84821685254da5f8cc39410-02539926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bee94ae48de853b49453ace6157d2fb7a7b277b' => 
    array (
      0 => '/home/estil450/public_html/application/views/navbar.tpl',
      1 => 1421065412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84821685254da5f8cc39410-02539926',
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
  'unifunc' => 'content_54da5f8ccb7e66_24221186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54da5f8ccb7e66_24221186')) {function content_54da5f8ccb7e66_24221186($_smarty_tpl) {?><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
            <a href="admin/navbar.tpl"></a>
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
