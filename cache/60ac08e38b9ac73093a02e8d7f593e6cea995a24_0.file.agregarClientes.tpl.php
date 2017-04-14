<?php /* Smarty version 3.1.24, created on 2016-12-18 14:22:56
         compiled from "/var/www/html/kioscogestion/templates/agregarClientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10693170425856c5f0a5f395_59721073%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60ac08e38b9ac73093a02e8d7f593e6cea995a24' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/agregarClientes.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10693170425856c5f0a5f395_59721073',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5856c5f0a6f6c7_27267492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5856c5f0a6f6c7_27267492')) {
function content_5856c5f0a6f6c7_27267492 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10693170425856c5f0a5f395_59721073';
?>
<!DOCTYPE>
<html>
<head>

    <title>Agregar clientes</title>
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
            <td class = "menuItem"><a href="productos.php" class = "menuLink">Productos</a></td>
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