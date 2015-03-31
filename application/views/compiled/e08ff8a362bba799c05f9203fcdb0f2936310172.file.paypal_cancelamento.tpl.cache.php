<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 18:23:05
         compiled from "/home/maria951/public_html/homolog/application/views/paypal_cancelamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2077906203545a8729c19e67-28522052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e08ff8a362bba799c05f9203fcdb0f2936310172' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/paypal_cancelamento.tpl',
      1 => 1415218983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2077906203545a8729c19e67-28522052',
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
  'unifunc' => 'content_545a8729c81c01_86731498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a8729c81c01_86731498')) {function content_545a8729c81c01_86731498($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    
    

    <div class='section-title'>
        <h2><strong>Pedido</strong> cancelado!</h2>
    </div>
    <h3 style="font-weight: 300;margin-top: 25px"><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
,<br><br> seu pagamento foi cancelado pelo PayPal.<br> 
        Verifique os dados informados e tente novamente.<br/>
    Acompanhe seu pedido na página <a href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/meus-pedidos'>Meus pedidos</a>.</h3>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
