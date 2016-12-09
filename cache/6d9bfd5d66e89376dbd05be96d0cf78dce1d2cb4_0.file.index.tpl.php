<?php /* Smarty version 3.1.24, created on 2016-03-19 21:12:48
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2392356edb2c07878a5_06104026%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d9bfd5d66e89376dbd05be96d0cf78dce1d2cb4' => 
    array (
      0 => './templates/index.tpl',
      1 => 1458418365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2392356edb2c07878a5_06104026',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56edb2c07be870_17701090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56edb2c07be870_17701090')) {
function content_56edb2c07be870_17701090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2392356edb2c07878a5_06104026';
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