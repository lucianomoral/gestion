<!DOCTYPE>
<html>
<head>
    
<title> Control partner </title>
<meta charset="utf-8">
<!--link rel = "stylesheet" href="estilos/estilos.css"-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js"></script>

<script src = "js/app/viewmodel/partnerViewModel.js"></script>
    
</head>

<body>

	<div id="ko">
		<input type="text" name="CHE" class="form-control" data-bind="value:$root.valor,valueUpdate:'keyup'">
		<button class="btn" data-bind="click:$root.mostrarObservable">VO CABEZA</button>
		<p data-bind="text:$root.valor"></p>
	</div>

</body>
</html>