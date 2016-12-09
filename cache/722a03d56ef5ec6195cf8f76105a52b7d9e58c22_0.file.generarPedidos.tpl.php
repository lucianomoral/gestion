<?php /* Smarty version 3.1.24, created on 2016-07-10 21:51:19
         compiled from "C:/wamp/www/Kiosco/templates/generarPedidos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:258815782a737ef7807_10404631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '722a03d56ef5ec6195cf8f76105a52b7d9e58c22' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/generarPedidos.tpl',
      1 => 1468180171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258815782a737ef7807_10404631',
  'variables' => 
  array (
    'clientes' => 0,
    'i' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782a73802e307_75586835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782a73802e307_75586835')) {
function content_5782a73802e307_75586835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258815782a737ef7807_10404631';
?>
<!DOCTYPE>
<html>
<head>

    <title>Generar pedido</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
    
    
</head>
<body>

<header><h1 class = "encabezado">Gestión Kiosco</h1></header>

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

<section>
    
    <form action="cargarProductos.php" method="get">
        <div id="clienteLista">
          
           <label for="cliente" class="labelGral">Cliente: </label>
               <div id="divCliente" class="organizador">
                   <select name="cliente" id="cliente">
                   <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null, 0);?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['name'] = "clientes";
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['clientes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["clientes"]['total']);
?>
                        <option class = "option" value = <?php echo $_smarty_tpl->tpl_vars['ids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
><?php echo $_smarty_tpl->tpl_vars['clientes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clientes']['index']];?>
</option>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php endfor; endif; ?>
                   </select> 
                </div>
                
               <br><br>

            <label for = "lista" class="labelGral">Lista: </label>
               <div id="divLista" class="organizador">
                   <select name="lista" id="lista">

                       <option class = "option">Lista6</option>
                       <option class = "option">Lista10</option>

                   </select>
                </div>

                <br><br>
                
            <label for="descripcion" class="labelGral">Descripcion: </label><input type="text" name = "descripcion" id="descripcion" disabled><br><br>
            
            <div id="facturasAbiertas"></div>
            <div id = "divBotones"><input type="button" value="Confirmar" name="confirmar" id="confirmar"></div><br>
            
            <a href = "main.php"><input type="button" value="Volver"></a>    
                        
        </div>
        
    </form>
   
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>