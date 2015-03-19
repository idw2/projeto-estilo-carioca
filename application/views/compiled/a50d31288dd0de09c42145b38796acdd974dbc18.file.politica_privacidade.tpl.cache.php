<?php /* Smarty version Smarty-3.1.19, created on 2014-11-04 13:57:45
         compiled from "/home/maria951/public_html/homolog/application/views/politica_privacidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5058928425458f779045fb3-33706268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50d31288dd0de09c42145b38796acdd974dbc18' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/politica_privacidade.tpl',
      1 => 1413984247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5058928425458f779045fb3-33706268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5458f7790c5ae4_75683454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5458f7790c5ae4_75683454')) {function content_5458f7790c5ae4_75683454($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                        <strong>Política</strong> de Privacidade
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            </div>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
