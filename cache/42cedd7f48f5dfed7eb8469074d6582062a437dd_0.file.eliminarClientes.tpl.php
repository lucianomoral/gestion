<?php /* Smarty version 3.1.24, created on 2016-12-18 19:35:04
         compiled from "/var/www/html/kioscogestion/templates/eliminarClientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:317887558570f18ced892_53968638%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42cedd7f48f5dfed7eb8469074d6582062a437dd' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/eliminarClientes.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317887558570f18ced892_53968638',
  'variables' => 
  array (
    'clientes' => 0,
    'i' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58570f192c0437_01973158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58570f192c0437_01973158')) {
function content_58570f192c0437_01973158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317887558570f18ced892_53968638';
?>
<!DOCTYPE>
<html>
<head>

    <title>Eliminar clientes</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
        $("document").ready(function(){
            
            $("#eliminar").click(function(){
                
                yesNo = confirm("Desea eliminar el cliente?");
                
                if(yesNo){
                
                    var form = document.forms[0];

                    form.action = "maestroClientes.php";

                    form.submit();
                    
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

<section class="query">

<div id="eliminarCliente">
    <form action="" method="get">

        <label class = "labelGral" for="">Clientes: </label>
            <select id = "idCliente" name="idCliente">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['name'] = 'clientes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['clientes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['clientes']['total']);
?>
            <option value = <?php echo $_smarty_tpl->tpl_vars['ids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
><?php echo $_smarty_tpl->tpl_vars['clientes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clientes']['index']];?>
</option>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php endfor; endif; ?>

            </select><br><br>
        
        <input type="button" value="Eliminar" id="eliminar"><br><br>
        <a href = "clientes.php"><input type="button" value="Volver"></a>

    </form>
</div>

</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>