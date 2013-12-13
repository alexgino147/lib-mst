<?php /* Smarty version Smarty-3.0.4, created on 2013-12-10 22:13:23
         compiled from ".\templates\validartramites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2421452a7d853763219-26821886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e782da4ba64687af77cc178d8d1d2b48dbf5955a' => 
    array (
      0 => '.\\templates\\validartramites.tpl',
      1 => 1386731514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2421452a7d853763219-26821886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\AppServ\www\std\libs\plugins\function.html_options.php';
?>
<html>

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="templates/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="templates/js/bootstrap.min.js"></script>


<form class="form-horizontal">
<fieldset>

<legend>Registrar tramite</legend>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Seleccione Area</label>
  <div class="controls">
    <select id="selectbasic" name="area" class="input-xlarge">
      <option value=0>Seleccione area</option>
       <option value=1>PLANEAMIENTO Y PRESUPUESTO</option>
        <option value=2>OFICINA DE ADMISION</option>
         <option value=3>GRADOS Y TITULOS</option>
    </select>
  </div>
</div>

<!-- Select Basic -->


<div class="control-group">
  <label class="control-label" for="selectbasic">Seleccione Tramite</label>
  <div class="controls">
      <select name="selectbasic" id="selectbasic" class="input-xlarge" >
      <option value="<?php echo (isset($_smarty_tpl->getVariable('idtramite')->value[0]) ? $_smarty_tpl->getVariable('idtramite')->value[0] : null);?>
" class="select">Seleccione tramite</option>
 	  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('option_valuesit')->value,'selected'=>$_smarty_tpl->getVariable('option_selectedit')->value,'output'=>$_smarty_tpl->getVariable('option_outputit')->value),$_smarty_tpl);?>

    </select>
      
      
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Text Input</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-xlarge" value="<?php echo (isset($_smarty_tpl->getVariable('nombremanual')->value[0]) ? $_smarty_tpl->getVariable('nombremanual')->value[0] : null);?>
">

  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Text Input</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-xlarge">

  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Text Area</label>
  <div class="controls">                     
    <textarea id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
 
  <div class="controls">
       <input name="tipo" value="ns" type="hidden" size="50" />
    <button id="button1id" name="button1id" class="btn btn-success">Siguiente</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
