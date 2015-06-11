<?php /*%%SmartyHeaderCode:96143180154ecea392e9c29-12984447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caeadec6f16f61472975349e4eac332a9713cc8e' => 
    array (
      0 => '/home/estil450/public_html/application/views/endereco_conta.tpl',
      1 => 1423751683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96143180154ecea392e9c29-12984447',
  'variables' => 
  array (
    'sem_endereco' => 0,
    'endereco_list' => 0,
    'endereco' => 0,
    'i' => 0,
    'codcadastro' => 0,
    'msg_erro' => 0,
    'erro' => 0,
    'cep' => 0,
    'web_files' => 0,
    'logradouro' => 0,
    'numero' => 0,
    'complemento' => 0,
    'bairro' => 0,
    'cidade' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ecea394280e9_46229394',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecea394280e9_46229394')) {function content_54ecea394280e9_46229394($_smarty_tpl) {?><div class="col-sm-6 col-sm-push-6">
        <form class="navbar-form navbar-left" name="formListenderecos" id="formListenderecos" style="width: 100%">    
         
          
                                                <h4 colspan='2'>1. Endereço adicional</h4>
                                <div class="">
                    <div class="panel-body">
                        <table class="table" style="font-size: 14px">
                            <tr>
                                <td rowspan='4'><input type='radio' value='0' name='prioridade' onclick="javascript:alter_endereco_entrega2('CC61458307372203378CC50B43C07D71', 'A1556FEE63CD9251D6C66B01206BBDBD')" id='CC61458307372203378CC50B43C07D71' /></td>
                                <td>CEP:</td>
                                <td>72450-050</td> 
                                <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos2('CC61458307372203378CC50B43C07D71', 'A1556FEE63CD9251D6C66B01206BBDBD')"><i class="fa fa-times"></i></span></td>
                            </tr>    
                            <tr> <td>Endereço:</td><td>Quadra 5, nº 104 </td> </tr>
                            <tr> <td>Bairro:</td><td>Setor Leste (Gama)</td> </tr>
                            <tr> <td>Cidade/UF:</td><td>Brasília/DF</td> </tr>
                        </table>
                    </div>
                </div>
                
                
          
                                                <h4 colspan='2'>2. Endereço de entrega</h4>
                                <div class="">
                    <div class="panel-body">
                        <table class="table" style="font-size: 14px">
                            <tr>
                                <td rowspan='4'><input type='radio' value='1' name='prioridade' onclick="javascript:alter_endereco_entrega2('88BF86A516D4E99A318ACE0142DF39D2', 'A1556FEE63CD9251D6C66B01206BBDBD')" id='88BF86A516D4E99A318ACE0142DF39D2' checked="true"/></td>
                                <td>CEP:</td>
                                <td>72450-050</td> 
                                <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos2('88BF86A516D4E99A318ACE0142DF39D2', 'A1556FEE63CD9251D6C66B01206BBDBD')"><i class="fa fa-times"></i></span></td>
                            </tr>    
                            <tr> <td>Endereço:</td><td>Quadra 5, nº 104 </td> </tr>
                            <tr> <td>Bairro:</td><td>Setor Leste (Gama)</td> </tr>
                            <tr> <td>Cidade/UF:</td><td>Brasília/DF</td> </tr>
                        </table>
                    </div>
                </div>
                
                
            </form>
</div> 

<div class="col-sm-6 col-sm-pull-6">
    <div class="panel panel-primary" >
        <div class="panel-body" style="border: solid 0 #e9e9e9;">
                        <form class="form" id="formulario_enderecos" method="post" onsubmit="return false">

                
                
                <div class="form-group">
                    <label for="cep" class="required">CEP</label>
                    <div class="form-inline">
                        <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="" placeholder="CEP" style="margin-right: 15px;"/>
                        <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><a>» Pesquisar</a></span>  
                        <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cep" class="required">Endereço</label>
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
                    <label for="cep" class="required">Completemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="" placeholder="Complemento"/>
                </div>
                <div class="form-group">
                    <label for="cep" class="required">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="" placeholder="Bairro"/>
                </div>
                <div class="form-group">
                    <label for="cep" class="required">Cidade / Estado</label>
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
                    <button type="submit" class="btn btn-default" name="enviar" onclick="javascript:cadastrar_endereco_conta()">Cadastrar endereço</button>
                    <span class="Loader-endereco hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
                </div>
            </form>
        </div>
    </div>
</div><?php }} ?>
