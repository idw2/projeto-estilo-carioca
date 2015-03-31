<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 11:17:20
         compiled from "/home/maria951/public_html/novo/application/views/programa_vantagens.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17210005305447ae602e3865-72785865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd18f8238f4ae7f84b2c437bf1192b393c6ccd7' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/programa_vantagens.tpl',
      1 => 1413983835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17210005305447ae602e3865-72785865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447ae6034bb55_53501056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447ae6034bb55_53501056')) {function content_5447ae6034bb55_53501056($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Programa</strong> de Vantagens
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
