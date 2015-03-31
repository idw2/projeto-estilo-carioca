<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 18:08:02
         compiled from "/home/maria951/public_html/homolog/application/views/paypal_confirmado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1366446417545a83a2d07c89-06109929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e14e99ac736bb6c9d18cb4ef4e8f0848259f0d7' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/paypal_confirmado.tpl',
      1 => 1415217240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366446417545a83a2d07c89-06109929',
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
  'unifunc' => 'content_545a83a2d813d8_54726991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a83a2d813d8_54726991')) {function content_545a83a2d813d8_54726991($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    
    

    <div class='section-title'>
        <h2><strong>Pedido</strong> confirmado!</h2>
    </div>
    <h3 style="font-weight: 300;margin-top: 25px"><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
,<br/><br/> 
        
        seu pagamento já consta em nosso sistema. <br/>
        Acompanhe seu pedido na página <a href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/meus-pedidos'>Meus pedidos</a>.</h3>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
