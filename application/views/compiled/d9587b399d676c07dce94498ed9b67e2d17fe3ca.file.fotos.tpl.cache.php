<?php /* Smarty version Smarty-3.1.19, created on 2015-03-30 17:05:37
         compiled from "/home/estil450/public_html/homolog/application/views/admin/fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194243666955197451f001d5-25950544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9587b399d676c07dce94498ed9b67e2d17fe3ca' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/fotos.tpl',
      1 => 1427121258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194243666955197451f001d5-25950544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'produto' => 0,
    'foto_destaque' => 0,
    'fotos' => 0,
    'foto' => 0,
    'key' => 0,
    'item' => 0,
    'url_amigavel' => 0,
    'CODFOTO' => 0,
    'ORIGINAL' => 0,
    'NOME' => 0,
    'web_files' => 0,
    'ORDEM' => 0,
    'TIPO' => 0,
    'FORMATO' => 0,
    'star' => 0,
    'stt' => 0,
    'eye' => 0,
    'i' => 0,
    'url_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55197452277f94_19749445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55197452277f94_19749445')) {function content_55197452277f94_19749445($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/homolog/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                        <style>

                            .pNameImput.Loader{
                                background: url(/web-files/img/Loader_small.gif) no-repeat;
                                background-position: center right 6px;
                            }
                        </style>
<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
        <!--
        <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        -->
    </div>

</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Imagens
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li>
                <i class="fa fa-paper-plane"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/produtos-lista">Lista de Produtos</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Imagens
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <br/>
            <div class="col-md-12 text-right">
                <?php $_smarty_tpl->tpl_vars["link_btn_voltar"] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['language']->value)."/produtos/produtos-lista", null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("admin/btn_voltar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
                
            </div>
        </div>

    </div>
</div>     


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Preview - <?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
 - R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
 </h1>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['foto_destaque']->value=='') {?>
                    <img src="http://placehold.it/400x400" alt="" border="0" title="" class="img-thumbnail"/>
                <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['foto_destaque']->value;?>
" alt="" border="0" title="" class="img-thumbnail"/>
                <?php }?> 
            </div>
        </div>
    </div>
</div>

<br/>

<a id="m-btn" href='#single_2' class="btn btn-lg btn-success fancybox"><i class="fa fa-photo"></i> Enviar Fotos</a>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Imagens</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1" cellspacing="0" cellpadding="2">

                    <thead>
                    <th>#</th>
                    <th>Informações</th>
                    <th>Ações</th>

                    </thead>


                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['foto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->key => $_smarty_tpl->tpl_vars['foto']->value) {
$_smarty_tpl->tpl_vars['foto']->_loop = true;
?>

                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['foto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="CODFOTO") {?> <?php $_smarty_tpl->tpl_vars['CODFOTO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="DTA") {?> <?php $_smarty_tpl->tpl_vars['DTA'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="ORIGINAL") {?> <?php $_smarty_tpl->tpl_vars['ORIGINAL'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="NOME") {?> <?php $_smarty_tpl->tpl_vars['NOME'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="TIPO") {?> <?php $_smarty_tpl->tpl_vars['TIPO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="FORMATO") {?> <?php $_smarty_tpl->tpl_vars['FORMATO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="DESTAQUE") {?> <?php $_smarty_tpl->tpl_vars['DESTAQUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable("desative", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable('', null, 0);?>
                                <?php }?> 
                            <?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="STATUS") {?> <?php $_smarty_tpl->tpl_vars['STATUS'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                                <?php }?> 
                            <?php }?>  
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="ORDEM") {?> <?php $_smarty_tpl->tpl_vars['ORDEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                        <?php } ?>

                        <?php $_smarty_tpl->tpl_vars["url_del"] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['language']->value)."/produtos/delete_foto/url/".((string)$_smarty_tpl->tpl_vars['url_amigavel']->value)."/codfoto/".((string)$_smarty_tpl->tpl_vars['CODFOTO']->value), null, 0);?>

                        <tr id="<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
" style="border-radius: 0;">
                            <td>    
                                <img src="<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->

                                <div style="width:120px;">
                                        <b>Ordem: </b> 
                                        <div class="input-group">
                                            <input type="text" class="form-control pNameImput" name="<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
" id="ORDEM_<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ORDEM']->value;?>
" style="width: 120px;"/>
                                            <span class="input-group-btn">
                                                <span class="btn btn-default" type="button" onclick="javascript:pOrdemFotoUpdate('ORDEM_<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                <span style="display: inline-block;">
                                    
                                    <strong>Nome: </strong><?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
<br/>
                                    <strong>Tipo: </strong> <?php echo $_smarty_tpl->tpl_vars['TIPO']->value;?>
<br/>
                                    <strong>Formato: </strong>.<?php echo $_smarty_tpl->tpl_vars['FORMATO']->value;?>
<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    

                            <td>
                                <span style="display: inline-block; margin-right: 10px">

                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/foto_destaque/url/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
/codfoto/<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
"><span class="ico-default-star <?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/foto_status/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/url/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
/codfoto/<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
"><span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="#crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="fancybox-crop" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onclick="javascript:getCrop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
');"><span class="ico-default-edit" data-toggle="tooltip" title="Crop"><i class="fa fa-crop"></i></span></a>
                                    <div id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX1_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY1_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX2_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY2_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataWidth_1" />
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataHeight_1"/>

                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX1_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY1_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX2_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY2_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataWidth_2" />
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataHeight_2"/>

                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX1_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY1_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX2_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY2_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataWidth_3" />
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_1">
                                                <div class="panel-body pn1_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <img class='crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_1' src='<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                            <div class="myload_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
', 'crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_1', '<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
', 1, 'retrato', 'crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_2 hidex">  
                                                <div class="panel-body pn2_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <img class='crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_2' src='<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                            <div class="myload_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
', 'crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_2', '<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
', 2, 'paisagem', 'crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <a onclick="delete_foto('<?php echo $_smarty_tpl->tpl_vars['url_del']->value;?>
')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                </span>    
                            </td>    
                        </tr>


                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>
                </table>

                <pre id="serialize_output" style="display: none;">Item 1,Item 3,Item 2,Item 5,Item 4,Item 6</pre>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"  style="text-align: left;">


        <span class="Loader hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>
        <div id="single_2" style="display: none; width: 530px; height: 500px;">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div id="mulitplefileuploader">Upload</div>
                    <input type="hidden" id="url_amigavel" value="<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
"/>
                </div>
                <div class="panel-body">
                    <div id="status"></div>
                </div>

            </div>
            <div>
                <p><button type="buttom" class="btn btn-primary btn-primary-maria" onclick="javascript:$('a[title=Close]').click();">FECHAR</button></p>
            </div>    


        </div>

    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script>
    function getCrop(id) {

        var $image1 = $("." + id + "_preview_1"),
                $dataX1_1 = $("#" + id + "_dataX1_1"),
                $dataY1_1 = $("#" + id + "_dataY1_1"),
                $dataX2_1 = $("#" + id + "_dataX2_1"),
                $dataY2_1 = $("#" + id + "_dataY2_1"),
                $dataHeight_1 = $("#" + id + "_dataHeight_1"),
                $dataWidth_1 = $("#" + id + "_dataWidth_1");

        $image1.cropper({
            aspectRatio: 0.9,
            done: function (data) {
                console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
                $dataX1_1.val(data.x1);
                $dataY1_1.val(data.y1);
                $dataX2_1.val(data.x2);
                $dataY2_1.val(data.y2);
                $dataHeight_1.val(data.height);
                $dataWidth_1.val(data.width);
            }
        });

        var $image2 = $("." + id + "_preview_2"),
                $dataX1_2 = $("#" + id + "_dataX1_2"),
                $dataY1_2 = $("#" + id + "_dataY1_2"),
                $dataX2_2 = $("#" + id + "_dataX2_2"),
                $dataY2_2 = $("#" + id + "_dataY2_2"),
                $dataHeight_2 = $("#" + id + "_dataHeight_2"),
                $dataWidth_2 = $("#" + id + "_dataWidth_2");

        $image2.cropper({
            aspectRatio: 1.8,
            done: function (data) {
                console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
                $dataX1_2.val(data.x1);
                $dataY1_2.val(data.y1);
                $dataX2_2.val(data.x2);
                $dataY2_2.val(data.y2);
                $dataHeight_2.val(data.height);
                $dataWidth_2.val(data.width);
            }
        });

    }
</script><?php }} ?>
