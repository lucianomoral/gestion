<?php /* Smarty version 3.1.24, created on 2016-04-06 03:36:38
         compiled from "C:/wamp/www/Kiosco/templates/agregarClientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1299957046826a0c096_46230399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a792e2a8c99c4314244b508485a0f517530c08' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/agregarClientes.tpl',
      1 => 1459702178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299957046826a0c096_46230399',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57046826a6c1c2_82106642',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57046826a6c1c2_82106642')) {
function content_57046826a6c1c2_82106642 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1299957046826a0c096_46230399';
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
>
    
        $("document").ready(function(){
            
            $("#agregar").click(function(){
                
               if($("#clienteAgregar").val() == ""){
                   
                   alert("Falta completar nombre.");
                   
               } else {
                   
                   yesNo = confirm("Desea agregar el cliente " + $("#clienteAgregar").val() + " ?")
                   
                   if(yesNo){
                       
                    form = document.forms[0];
                       
                    form.action = "maestroClientes.php";
                   
                    document.forms[0].submit();             
                       
                   }
                   
               }
                
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
            <td class = "menuItem"><a href="" class = "menuLink">Productos</a></td>
            <td class = "menuItem"><a href="clientes.php" class = "menuLink">Clientes</a></td>
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="">

<div id="agregarCliente">
   
    <form action="" method="get">
        <label class="labelGral" for="clienteAgregar">Nombre: </label><input type="text" name="clienteAgregar" id="clienteAgregar" autocomplete = "off" required><br><br>
        <input type="button" value="Agregar" id="agregar"><br><br>
        <a href = "clientes.php"><input type="button" value="Volver"></a><br><br>
    </form>
</div>
    
</section>
<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>