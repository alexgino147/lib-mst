<?php /* Smarty version Smarty-3.0.4, created on 2013-12-13 00:01:04
         compiled from ".\templates\requisitos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2844152aa9490a15bf5-95087981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96f7139f715507dd9f0e87a298a6d75e788d1cc' => 
    array (
      0 => '.\\templates\\requisitos.tpl',
      1 => 1386857572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2844152aa9490a15bf5-95087981',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<html>

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="templates/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="templates/js/bootstrap.min.js"></script>



       <table class="table table-striped">
    
        <tr>
            <th>N</th>
            <th>Codigo Tramite</th>
            <th>Nombre Tramite</th>
            <th>Fecha Registro</th>
            <th>Estado Tramite</th>
        </tr>
  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['name'] = 'numloop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('idtramite')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total']);
?>
        <tr>
            <td><?php echo (isset($_smarty_tpl->getVariable('idtramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('idtramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
            <td><?php echo (isset($_smarty_tpl->getVariable('codigotramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('codigotramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
            <td><?php echo (isset($_smarty_tpl->getVariable('nombretramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('nombretramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
            <td><?php echo (isset($_smarty_tpl->getVariable('fecharegistro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('fecharegistro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
            <td><?php echo (isset($_smarty_tpl->getVariable('estadotramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('estadotramite')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
            <td><?php echo (isset($_smarty_tpl->getVariable('fecharegistro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('fecharegistro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
            <td><?php echo (isset($_smarty_tpl->getVariable('fecharegistro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]) ? $_smarty_tpl->getVariable('fecharegistro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']] : null);?>
</td>
        </tr>
       <?php endfor; endif; ?>
</table>

</html>
