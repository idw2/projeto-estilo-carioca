<?php /*%%SmartyHeaderCode:813129954544935f8e650a4-13225637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39ccc5f5b95d8ad3bd651d54cfd25ec16be830e' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/endereco.tpl',
      1 => 1413236062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813129954544935f8e650a4-13225637',
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'i' => 0,
    'codcadastro' => 0,
    'msg_erro' => 0,
    'erro' => 0,
    'cep' => 0,
    'logradouro' => 0,
    'numero' => 0,
    'complemento' => 0,
    'bairro' => 0,
    'cidade' => 0,
    'estado' => 0,
    'sem_endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544935f91fd789_97282681',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544935f91fd789_97282681')) {function content_544935f91fd789_97282681($_smarty_tpl) {?><div class="row">
    <div class="col-lg-6">
        <form class="navbar-form navbar-left" name="formListenderecos" id="formListenderecos" style="width: 100%">    
             
              
                                                            <h4 colspan='2'>1. Endereço de entrega</h4>
                                        <div class="">
                        <div class="panel-body">
                            <table class="table" style="font-size: 14px">
                                <tr>
                                    <td rowspan='4'><input type='radio' value='1' name='prioridade' onclick="javascript:alter_endereco_entrega('A6D19FEE0AC2269A00E9ED438229D5F4', '8EC4E7B2633AFA4C09BB5B0581916DD9')" id='A6D19FEE0AC2269A00E9ED438229D5F4' checked="true"/></td>
                                    <td>CEP:</td>
                                    <td>21720-000</td> 
                                    <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos('A6D19FEE0AC2269A00E9ED438229D5F4', '8EC4E7B2633AFA4C09BB5B0581916DD9')"><i class="fa fa-times"></i></span></td>
                                </tr>    
                                <tr> <td>Endereço:</td><td>Avenida Brasil - de 29661 a 30775 - lado ímpar, nº 10 </td> </tr>
                                <tr> <td>Bairro:</td><td>Realengo</td> </tr>
                                <tr> <td>Cidade/UF:</td><td>Rio de Janeiro/RJ</td> </tr>
                            </table>
                        </div>
                    </div>
                    
                    
              
                                                            <h4 colspan='2'>2. Endereço adicional</h4>
                                        <div class="">
                        <div class="panel-body">
                            <table class="table" style="font-size: 14px">
                                <tr>
                                    <td rowspan='4'><input type='radio' value='0' name='prioridade' onclick="javascript:alter_endereco_entrega('2D69802D62969A56E21254A5835FAB1A', '8EC4E7B2633AFA4C09BB5B0581916DD9')" id='2D69802D62969A56E21254A5835FAB1A' /></td>
                                    <td>CEP:</td>
                                    <td>72450-050</td> 
                                    <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos('2D69802D62969A56E21254A5835FAB1A', '8EC4E7B2633AFA4C09BB5B0581916DD9')"><i class="fa fa-times"></i></span></td>
                                </tr>    
                                <tr> <td>Endereço:</td><td>Quadra 5, nº 104 </td> </tr>
                                <tr> <td>Bairro:</td><td>Setor Leste (Gama)</td> </tr>
                                <tr> <td>Cidade/UF:</td><td>Brasília/DF</td> </tr>
                            </table>
                        </div>
                    </div>
                    
                    
                    </form>
        

    </div>
    <div class="col-sm-6">
        <div class="panel panel-primary" >
            <div class="panel-body">
                
                <form class="form" id="formulario_enderecos" method="post" onsubmit="return false">

                                            <div class="alert alert-success" role="alert"  style="font-size: 15px;"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                        
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="" placeholder="CEP" style="margin-right: 15px;"/>
                        <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><a>» Pesquisar</a></span>  
                        <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col col-sm-8">
                                <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="" placeholder="Endereço"/>
                            </div>
                            <div class="col col-sm-4">
                                <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="complemento" name="complemento" maxlength="12" value="" placeholder="Complemento"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="" placeholder="Bairro"/>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col col-sm-8">
                                <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="" placeholder="Cidade"/>
                            </div>
                            <div class="col col-sm-4">
                                <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="" placeholder="UF"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                          <button type="button" class="btn btn-default" name="enviar" onclick="javascript:cadastrar_endereco();">Cadastrar endereço</button>
                        <span class="Loader-endereco hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div>
    <ul class="pager">

                        <li class="next meu-endereco-entrega"><a onclick="javascript:forma_envio()">Meu endereço de entrega está correto &rarr;</a></li>
            <input type="hidden" id="EXISTE_ENDERECO_ENTREGA" value="SIM">
                </ul>
</div> 

<div style="clear: both;"></div>
<style>
    .endereco{
        cursor: pointer;
    }
</style>
<?php }} ?>
