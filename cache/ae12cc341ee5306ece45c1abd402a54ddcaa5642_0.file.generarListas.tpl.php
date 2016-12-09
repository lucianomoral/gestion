<?php /* Smarty version 3.1.24, created on 2016-04-15 04:05:38
         compiled from "C:/wamp/www/Kiosco/templates/generarListas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3126557104c72d03da5_43945059%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae12cc341ee5306ece45c1abd402a54ddcaa5642' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/generarListas.tpl',
      1 => 1460685816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3126557104c72d03da5_43945059',
  'variables' => 
  array (
    'idLista' => 0,
    'listaDesc' => 0,
    'familia' => 0,
    'grupo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57104c72e6b586_73234077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57104c72e6b586_73234077')) {
function content_57104c72e6b586_73234077 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3126557104c72d03da5_43945059';
?>
<!DOCTYPE>
<html>
<head>

    <title>Listado de Consultas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="js/generarListas.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
    $("document").ready(function(){
        
        var datos = $("#idLista").serialize();
        
        $.getJSON("AJAX.buscarLista.php", datos, crearTablaLista);
        
    });
        
    
    <?php echo '</script'; ?>
>
    
</head>
<body>

<header><h1 class="encabezado">Gestión Kiosco</h1></header>

<nav>
    
    <table class="menuPrincipal">
        <tr>
            <td class = "menuItem"><a href="generarPedidos.php" class = "menuLink">Generar pedidos</a></td>
            <td class = "menuItem"><a href="listas.php" class = "menuLink">Generar listas</a></td>
            <td class = "menuItem"><a href="precios.php" class = "menuLink">Precios</a></td>
            <td class = "menuItem"><a href="" class = "menuLink">Productos</a></td>
            <td class = "menuItem"><a href="clientes.php" class = "menuLink">Clientes</a></td>
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="query">
<div id="botonesBusq">
<label for="lista" class="labelGral">Id. Lista: </label><input type="text" name = "lista" class = "inputBloqueado" value = <?php echo $_smarty_tpl->tpl_vars['idLista']->value;?>
 id = "idLista" readonly><br><br>
<label for="listaDesc" class="labelGral">Descripcion: </label><input type="text" name = "listaDesc" class = "inputBloqueado" value = '<?php echo $_smarty_tpl->tpl_vars['listaDesc']->value;?>
' id = 'listaDesc' readonly><br><br>
<label for="margen" class="labelGral">Margen: </label><input type="number" name = "margen" id="margen"><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Familia: </label><select name="familia" id="familia" class = "busqParm" disabled>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['familia'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['name'] = 'familia';
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['familia']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['familia']['total']);
?>
    <option><?php echo $_smarty_tpl->tpl_vars['familia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['familia']['index']];?>
</option>
    <?php endfor; endif; ?>
    
</select><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Grupo: </label><select name="grupo" id="grupo" class = "busqParm" disabled>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['name'] = 'grupo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['grupo']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['grupo']['total']);
?>
    <option><?php echo $_smarty_tpl->tpl_vars['grupo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grupo']['index']];?>
</option>
    <?php endfor; endif; ?>
    
</select><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Nombre: </label><input type="text" class = "busqParm" name = "nombre" disabled><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Código: </label><input type="number" class = "busqParm" name = "idProd" disabled><br><br>
<input type="button" value = "Buscar" id="buscar"><br><br>
<input type="button" value = "Agregar" id="agregar"><br><br>
<input type="button" value = "Eliminar" id = "eliminar"><br><br>
<input type="button" value = "Generar PDF" id = "pdf"><br><br>
<a href = "listas.php"><input type="button" value = "Volver"></a>


</div>
       
<div id="divTablaResultados">

    <table id = "tablaResultados"></table>

</div>
<div id="divTablaLista">
    
    <table id="tablaLista"></table>
    
</div>
        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>