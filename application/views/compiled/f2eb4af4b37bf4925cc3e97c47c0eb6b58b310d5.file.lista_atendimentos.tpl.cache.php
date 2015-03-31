<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 13:56:41
         compiled from "/home/maria951/public_html/novo/application/views/admin/lista_atendimentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603493860542c32499ee8d8-27931510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2eb4af4b37bf4925cc3e97c47c0eb6b58b310d5' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/lista_atendimentos.tpl',
      1 => 1412110428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603493860542c32499ee8d8-27931510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'atendimentos_aberto' => 0,
    'chat' => 0,
    'i' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c3249a90873_68745270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c3249a90873_68745270')) {function content_542c3249a90873_68745270($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
<?php  $_smarty_tpl->tpl_vars['chat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atendimentos_aberto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chat']->key => $_smarty_tpl->tpl_vars['chat']->value) {
$_smarty_tpl->tpl_vars['chat']->_loop = true;
?>  
    <?php if ($_smarty_tpl->tpl_vars['chat']->value->CODATENDIMENTO!='') {?>    
        <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>class="myDragClass"<?php }?>>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chat']->value->DTA;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chat']->value->NOME;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chat']->value->EMAIL;?>
</td>
            
            <td>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/atendimento/chat/<?php echo $_smarty_tpl->tpl_vars['chat']->value->CODATENDIMENTO;?>
"  class="btn btn-primary">Atender</a>
            </td>
        </tr>    
    <?php }?>
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
<?php } ?> 
             <?php }} ?>
