<?php /* Smarty version 3.1.24, created on 2016-07-10 21:44:31
         compiled from "C:/wamp/www/Kiosco/templates/listasGuardadas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:262585782a59fe59626_51377459%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21b3fd2e28f818b69587776acfa864aee2cbded' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/listasGuardadas.tpl',
      1 => 1468179831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262585782a59fe59626_51377459',
  'variables' => 
  array (
    'listasGuardadas' => 0,
    'LG' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782a59fed8f56_10206711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782a59fed8f56_10206711')) {
function content_5782a59fed8f56_10206711 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '262585782a59fe59626_51377459';
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
            <td class = "menuItem"><a href="" class = "menuLink">Productos</a></td>
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