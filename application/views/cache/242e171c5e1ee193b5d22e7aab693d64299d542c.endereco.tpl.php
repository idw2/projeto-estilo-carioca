<?php /*%%SmartyHeaderCode:11565880185460d6a8908e29-48444772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '242e171c5e1ee193b5d22e7aab693d64299d542c' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/endereco.tpl',
      1 => 1415116022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11565880185460d6a8908e29-48444772',
  'variables' => 
  array (
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
    'sem_endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d6a8ae08b2_89800116',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d6a8ae08b2_89800116')) {function content_5460d6a8ae08b2_89800116($_smarty_tpl) {?><div class="row">
    <div class="col-sm-6 col-sm-push-6">
        <form class="form" name="formListenderecos" id="formListenderecos" >    
             
              
                                                            <h4 colspan='2'>1. Endereço de entrega</h4>
                                        <div class="">
                        <div class="panel-body">
                            <table class="table" style="font-size: 14px">
                                <tr>
                                    <td rowspan='4'><input type='radio' value='1' name='prioridade' onclick="javascript:alter_endereco_entrega('E207754F930EBED4E86D14972EB93B1C', '22385F07AFFF47C41EB0D197BEE2FB75')" id='E207754F930EBED4E86D14972EB93B1C' checked="true"/></td>
                                    <td>CEP:</td>
                                    <td>72450-050</td> 
                                    <td rowspan='4'><span class="plus" onclick="javascript:del_row_enderecos('E207754F930EBED4E86D14972EB93B1C', '22385F07AFFF47C41EB0D197BEE2FB75')"><i class="fa fa-times"></i></span></td>
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
                <button type="button" class="btn btn-default" name="enviar" onclick="javascript:cadastrar_endereco();">Cadastrar endereço</button>
                <span class="Loader-endereco hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
            </div>
        </form>
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
