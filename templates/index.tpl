<!DOCTYPE>
<html>
<head>
    
<title> Kiosco Gestión </title>    
<meta charset="utf-8">

<link rel = "stylesheet" href="estilos/estilos.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
<script src = "js/index.js"></script>
    
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
    
    
</html>