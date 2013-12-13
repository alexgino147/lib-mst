<?php /* Smarty version Smarty-3.0.4, created on 2013-12-13 00:31:02
         compiled from ".\templates\registrartramites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3213152aa9b967b0844-14556567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890acfa8bd219f2be9d288141f0abe56703faf6f' => 
    array (
      0 => '.\\templates\\registrartramites.tpl',
      1 => 1386912659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3213152aa9b967b0844-14556567',
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
<div>Registrar tramite</div><br>

<table border="0">
        <tr>
            <td>
            
                <div class="control-group">
  <label class="control-label" for="textinput">Codigo</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-xlarge" value="<?php echo (isset($_smarty_tpl->getVariable('nombremanual')->value[0]) ? $_smarty_tpl->getVariable('nombremanual')->value[0] : null);?>
">

  </div>
</div>
    
                    <div class="control-group">
  <label class="control-label" for="textinput">Alumno</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-xlarge" value="<?php echo (isset($_smarty_tpl->getVariable('nombremanual')->value[0]) ? $_smarty_tpl->getVariable('nombremanual')->value[0] : null);?>
">

  </div>
</div>
    
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
            
            </td>
            <td>
            
 
<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Requisitos</label>
  <div class="controls">                     
    <textarea id="textarea" name="textarea" rows="10" cols="30"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
 
 
</div>

            
            </td>
        </tr>
</table>

 <div class="controls">
       <input name="tipo" value="ns" type="hidden" size="50" />
    <button id="button1id" name="button1id" class="btn btn-success">Guardar</button>
   <!-- <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>-->
  </div>
</form>
