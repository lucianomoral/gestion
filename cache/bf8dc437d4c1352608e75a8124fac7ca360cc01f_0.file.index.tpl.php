<?php /* Smarty version 3.1.24, created on 2016-12-18 12:57:01
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3056218085856b1cde69be8_33063702%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8dc437d4c1352608e75a8124fac7ca360cc01f' => 
    array (
      0 => './templates/index.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3056218085856b1cde69be8_33063702',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5856b1cde88095_89842502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5856b1cde88095_89842502')) {
function content_5856b1cde88095_89842502 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3056218085856b1cde69be8_33063702';
?>
<!DOCTYPE>
<html>
<head>
    
<title> Kiosco Gestión </title>    
<meta charset="utf-8">

<link rel = "stylesheet" href="estilos/estilos.css">

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
<?php echo '<script'; ?>
 src = "js/index.js"><?php echo '</script'; ?>
>
    
</head>

<body>

<form action = "login.php" method = "post" id="formLogin">
    
<h3>Ingrese nombre y usuario</h3>
    
<label for="usuario" class="labelLogin">Usuario: </label><input type = "text" name = "usuario" required autocomplete="off" class="inputLogin"><br><br>
<label for="pass" class="labelLogin"> Contraseña: </label><input type = "password" name = "pass" required autocomplete="off" class = "inputLogin"><br><br>

<input type="submit"><br><br>
    
<div id="validador"></div>
    
</form>
    
    
    
    
    
</body>
    
    
</html><?php }
}
?>