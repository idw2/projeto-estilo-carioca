<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 19:08:13
         compiled from "/home/maria951/public_html/homolog/application/views/paypal_notificacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980978772545a91bd1db0a5-39670314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9fbb9e3ecba7f37f21b5288edbd81182de686f' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/paypal_notificacao.tpl',
      1 => 1415219228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980978772545a91bd1db0a5-39670314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saudacao' => 0,
    'NOME' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545a91bd3a5be6_27713310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a91bd3a5be6_27713310')) {function content_545a91bd3a5be6_27713310($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    
    

    <div class='section-title'>
        <h2><strong>Pedido</strong> não confirmado!</h2>
    </div>
    <h3 style="font-weight: 300;margin-top: 25px"><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
,<br><br> houve um erro ao efetuar o pagamento.<br/>
        Verifique os dados informados e tente novamento.<br>
         Acompanhe seu pedido na página <a href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/meus-pedidos'>Meus pedidos</a>.</h3>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
