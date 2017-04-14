<?php /* Smarty version 3.1.24, created on 2016-12-18 19:35:22
         compiled from "/var/www/html/kioscogestion/templates/consultaPrecios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97000239858570f2a0853a1_04583170%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c813557928e812d2a315c3b7818cccdec63779' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/consultaPrecios.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97000239858570f2a0853a1_04583170',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58570f2a095715_07755330',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58570f2a095715_07755330')) {
function content_58570f2a095715_07755330 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97000239858570f2a0853a1_04583170';
?>
<!DOCTYPE>
<html>
<head>

    <title>Consulta de precios</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="js/consultaPrecios.js"><?php echo '</script'; ?>
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

<section class="query">

       <form action="" method="get" id="formConsultaPrecios">
           
           <div id = "divBuscaPrecios" download = "prueba.xls">
               <label class = "labelGral" for="margen">Margen: </label><input type="number" name = "margen" id = "margen" autocomplete="off"><br><br>
               <input type = 'radio' class = 'check' name = "habilitar"><label class = "labelGral" for="idProd">Código: </label><input type="number" name = "idProd" id="idProd" disabled autocomplete="off"><br><br>
               <input type = 'radio' class = 'check' name = "habilitar"><label class = "labelGral" for="nombre">Nombre: </label><input type="text" name = "nombre" id = "nombre" disabled autocomplete="off"><br><br>
               <input type="button" value="Buscar" id="buscar"><br><br>
               <input type="button" value="Limpiar" id="limpiar"><br><br>
               <a href = "precios.php"><input type="button" value="Volver" ></a><br><br>
           </div>
           
           <table id="tablaConsultaPrecios">
               
               
               
           </table>
        
       </form>
        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>