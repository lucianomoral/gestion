<?php /* Smarty version 3.1.24, created on 2016-12-18 21:14:34
         compiled from "/var/www/html/kioscogestion/templates/facturasCerradas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12888516115857266aa1c0b7_63400730%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0480749ed3177e37f15a5b6fa21c9bbfb4b9dc59' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/facturasCerradas.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12888516115857266aa1c0b7_63400730',
  'variables' => 
  array (
    'clientes' => 0,
    'C' => 0,
    'facturasCerradas' => 0,
    'FC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5857266aa2eef4_04057416',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857266aa2eef4_04057416')) {
function content_5857266aa2eef4_04057416 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12888516115857266aa1c0b7_63400730';
?>
<!DOCTYPE>
<html>
<head>

    <title>Facturas cerradas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
        $("document").ready(function(){
            
            $("#filtrarPorCliente").click(function(){
                
                if($("#clientes").attr("disabled") == "disabled"){
                    
                    $("#clientes").attr("disabled", false);
                   
                } else {
                   
                    $("#clientes").attr("disabled", true);
                   
                }
                
            });
            
            $("#generar").click(function(){
               
                window.open("SQL.reporteFactura.php?factura=" + $("#facturasCerradas").val());
                
            });
            
            $("#filtrar").click(function(){
                
                if($("#clientes").attr("disabled") == "disabled"){
                    
                    alert("No hay cliente marcado para filtrar.");
                    
                } else {
                    
                    var clienteFiltro = $("#clientes").val();
                    
                    var cantFact = 0;
                    
                    $("#facturasCerradas option").each(function(){
                        
                        if ($(this).attr("name") != clienteFiltro){
                            
                            $(this).css("display", "none");
                            
                            $(this).removeAttr("selected");
                            
                        } else {
                            
                            $(this).css("display", "block");
                            
                            $(this).attr("selected", true);
                            
                            cantFact++;
                            
                        }
                        
                    });
                    
                    if (cantFact == 0){
                            
                         $("#facturasCerradas option").css("display", "block").removeAttr("selected");
                            
                            alert("Ninguna factura para el cliente.");
                            
                        }
                        
                }
                
            });
            
            $("#eliminarFiltro").click(function(){
                
                $("#facturasCerradas option").css("display", "block").removeAttr("selected");
                    
            });
            
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
            <td class = "menuItem"><a href="productos.php" class = "menuLink">Productos</a></td>
            <td class = "menuItem"><a href="clientes.php" class = "menuLink">Clientes</a></td>
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="">
    <div id="divFacturasCerradas">
        <label for="clientes" class="labelGral">Clientes: </label><br>
        <input type="checkbox" id="filtrarPorCliente">
        <select id = 'clientes' disabled>
            <?php
$_from = $_smarty_tpl->tpl_vars['clientes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['C'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['C']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->_loop = true;
$foreach_C_Sav = $_smarty_tpl->tpl_vars['C'];
?>
            <option value = '<?php echo $_smarty_tpl->tpl_vars['C']->value['IdCliente'];?>
'><?php echo $_smarty_tpl->tpl_vars['C']->value['Nombre'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['C'] = $foreach_C_Sav;
}
?>
        </select>&nbsp;
        <button id="filtrar"><img src="imgs/lupa.png" width="15px"></button>&nbsp;
        <button id="eliminarFiltro"><img src="imgs/Delete.png" width="15px"></button>
           <br><br>
            
        <label for="facturasCerradas" class="labelGral">Facturas cerradas: </label><br>
            <select name="facturasCerradas" id="facturasCerradas">
                <?php
$_from = $_smarty_tpl->tpl_vars['facturasCerradas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['FC'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['FC']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['FC']->value) {
$_smarty_tpl->tpl_vars['FC']->_loop = true;
$foreach_FC_Sav = $_smarty_tpl->tpl_vars['FC'];
?>
                <option value = '<?php echo $_smarty_tpl->tpl_vars['FC']->value['IdFactura'];?>
' name = "<?php echo $_smarty_tpl->tpl_vars['FC']->value['IdCliente'];?>
"> <?php echo $_smarty_tpl->tpl_vars['FC']->value['IdFactura'];?>
 - <?php echo $_smarty_tpl->tpl_vars['FC']->value['Nombre'];?>
 - <?php echo $_smarty_tpl->tpl_vars['FC']->value['Descripcion'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['FC'] = $foreach_FC_Sav;
}
?>
            </select>
        <br><br>
        <input type="button" value="Generar" id="generar"><br><br>
        <a href="listadoConsultas.php"><input type="button" value="Volver"></a><br><br>
    </div>
</section>
<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>