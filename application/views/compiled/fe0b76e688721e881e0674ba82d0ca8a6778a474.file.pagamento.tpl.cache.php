<?php /* Smarty version Smarty-3.1.19, created on 2015-03-25 19:29:00
         compiled from "/home/estil450/public_html/application/views/pagamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32275987655130c7c413be5-80452773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0b76e688721e881e0674ba82d0ca8a6778a474' => 
    array (
      0 => '/home/estil450/public_html/application/views/pagamento.tpl',
      1 => 1425670186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32275987655130c7c413be5-80452773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'web_files' => 0,
    'nenhum_produto' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'CEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55130c7c5115e3_11902958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55130c7c5115e3_11902958')) {function content_55130c7c5115e3_11902958($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
<?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['endereco_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?>  
    <?php if ($_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO!=''&&$_smarty_tpl->tpl_vars['endereco']->value->STATUS=="1") {?>
        <?php $_smarty_tpl->tpl_vars["CEP"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['endereco']->value->CEP), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["CODENDERECO"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO), null, 0);?>
    <?php }?>    
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
<?php } ?>


<div>
    
    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/correios.jpg" alt="Métodos de Envio" title="Métodos de Envio" border="0" style="width: 168px;"/><br>
    
    (*) Atenção: Alguns serviços de entrega de encomenda poderão não estar disponíveis em algumas localidades 
</div>
<?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>   

    <div class="panel panel-default" style="box-shadow: none !important;">
        <br/>
        <!-- Default panel contents -->
        <div class="panel-heading">Estimar custo de envio da encomenda.</div>
        <!-- Table -->
        <table class="table" style="border: 0 !important">
            <thead  style="border: 0 !important">
                <tr style="border: 0">
                    <th style="border: 0 !important; padding: 8px !important">Digite seu CEP</th>
                    <th style="border: 0 !important; padding: 8px !important">Tipo de encomenda</th>
                </tr>
            </thead>
            <tbody  style="border: 0 !important">
                <tr style="border: 0 !important">
                    <td style="border: 0">
                        <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="<?php echo $_smarty_tpl->tpl_vars['total_peso']->value;?>
"/>
                        <input type="hidden" class="form-control" id="cep_destinatario_2" name="cep_destinatario_2" value="<?php echo $_smarty_tpl->tpl_vars['cep_remetente']->value;?>
"/>
                        <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" readonly="readonly"/>
                    </td>
                    <td  style="border: 0 !important">
                        <select id="forma_envio" class="select myFormaEnvio">
                            
                            <option value="41106" selected>Correios - PAC</option>
                            <option value="40010">Correios - SEDEX</option>
                            <option value="40215">Correios - SEDEX 10</option>
                            <option value="40290">Correios - SEDEX hoje</option>
                            <option value="Retirada na Loja">Retirada na Loja</option>
                            
                        </select>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 10%">                    
        <span class="Loader hide" style="text-align: center; width: 100%; display: inline-block;"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 21px;"/></span>
    </div>
    <div id="msg_erro"></div>
<?php }?>
<div style="clear: both;"></div>
<?php }} ?>
