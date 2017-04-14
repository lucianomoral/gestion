<?php /* Smarty version 3.1.24, created on 2016-12-18 21:27:59
         compiled from "/var/www/html/kioscogestion/templates/listasGuardadas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16279070035857298f46dae1_69129228%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a990bccac4197832f13e60ba6214b15c56a863' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/listasGuardadas.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16279070035857298f46dae1_69129228',
  'variables' => 
  array (
    'listasGuardadas' => 0,
    'LG' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5857298f480585_49714373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857298f480585_49714373')) {
function content_5857298f480585_49714373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16279070035857298f46dae1_69129228';
?>
<!DOCTYPE>
<html>
<head>

    <title>Listas guardadas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>

        var dataOptions = new Array();
        
        $("document").ready(function(){
            
            var i = 0;
            
            $("datalist option").each(function(){
                
                dataOptions[i] = $(this).val();
                
                i = i + 1;
                
            })
            
            $("form").submit(function(){
                
                if(!validarLista()){
                    
                    alert("Valor no valido.");
                    
                    $("#datalist").focus();
                    
                    return false;
                    
                }
                
            });
            
            $("#datalist").focus();
            
        });
    
    function validarLista(){
        
        var ok;
                
        for(var i = 0; i < dataOptions.length; i++){

            if($("#datalist").val() == dataOptions[i]){

              ok = true;

            }

        }

        if(!ok){

            $("#datalist").val("");

            ok = false;

        }
        
        return ok;
        
    }
            
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
<div id="generarLista">

<form action="actualizarListas.php" method="get">
   
    <label for="descripcion" class="labelGral">Listas creadas: </label><input list = "listasGuardadas" name="idLista" id = "datalist" autocomplete = off required>
        <datalist id = 'listasGuardadas'>

            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null, 0);?>
            <?php
$_from = $_smarty_tpl->tpl_vars['listasGuardadas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['LG'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['LG']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['LG']->value) {
$_smarty_tpl->tpl_vars['LG']->_loop = true;
$foreach_LG_Sav = $_smarty_tpl->tpl_vars['LG'];
?>
            <option value = '<?php echo $_smarty_tpl->tpl_vars['LG']->value['idLista'];?>
' label = '<?php echo $_smarty_tpl->tpl_vars['LG']->value['descripcion'];?>
'></option>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php
$_smarty_tpl->tpl_vars['LG'] = $foreach_LG_Sav;
}
?>

        </datalist>
    <br><br>
    <input type="submit" value="Editar"><br><br>
    <a href = "listas.php"><input type="button" value="Volver"></a><br><br>
    
</form>

</div>        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>