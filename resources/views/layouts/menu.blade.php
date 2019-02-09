<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba Editor</title>
	
	
	<link href=" {{ secure_asset('css/estilos.css') }} " rel="stylesheet">
	<link href=" {{ secure_asset('css/codemirror.css') }} " rel="stylesheet">
	
    <script src=" {{ secure_asset('js/codemirror.js') }} " type="text/javascript"></script>
	<link rel="stylesheet" href="css/temas/dracula.css">	
	<link href=" {{ secure_asset('css/bootstrap.min.css') }} " rel="stylesheet">
	<link href=" {{ secure_asset('css/introjs.css') }} " rel="stylesheet">
	<link href=" {{ secure_asset('css/ballon.css') }} " rel="stylesheet">
	<script src=" {{ secure_asset('js/jquery.min.js') }} " type="text/javascript"></script>

</head>
<body>

	<!--<h1>Tecsup Virtual</h1>-->
	<!--<h3 id="prueba">Bienvenido {{-- $fullname--}} </h3>-->
	
    <a class="tooltips" href="#">CSS Tooltips<span>Tooltip</span></a>

    <script src=" {{ secure_asset('mod/htmlmixed/htmlmixed.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('mod/xml/xml.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('mod/css/css.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('mod/javascript/javascript.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('adds/edit/closetag.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('js/popper.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('js/bootstrap.js') }} " type="text/javascript"></script>
    <script src=" {{ secure_asset('js/intro.js') }} " type="text/javascript"></script>
    @yield("content")
    
    
    
    
    
    
</body>
</html>