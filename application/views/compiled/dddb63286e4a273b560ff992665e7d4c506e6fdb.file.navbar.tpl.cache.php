<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 14:17:41
         compiled from "/home/maria951/public_html/novo/application/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:574053706544a7ba5186fc8-87893794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1414165334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '574053706544a7ba5186fc8-87893794',
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
  'unifunc' => 'content_544a7ba51fb8e4_52789362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a7ba51fb8e4_52789362')) {function content_544a7ba51fb8e4_52789362($_smarty_tpl) {?><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
  <form class="navbar-form pull-right search-wrap" role="search">
    <input type="search" class="form-control" placeholder="BUSCAR">
    <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
  </form>  
</div><?php }} ?>
