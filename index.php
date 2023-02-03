<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Login</title>
	<link rel="stylesheet" href="style.css">
	<style>
		body{
			box-sizing: border-box;
			display: flex;
   align-items: center;
   justify-content: space-evenly;
   justify-self: start;
		background-color: lightcyan;
			
		}

	#formulario{
   box-shadow: 2px 2px 2px 2px lightgreen;
  
		}
		#formulario{
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
		}
		#formulario > div{
			border: 2px solid skyblue;
			text-align: center;
			padding: 20px;
			font-size: 30px;
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
a{
	text-decoration: none;
	color: black;
}
#formulario > div:hover{
	background-color: yellowgreen;
}
</style>
</head>
<body>
	
<div id="formulario">
	<div><a href="login-simples/">Login Simples</a></div>
	<div><a href="login-simples/">Login Com Limitação de Acesso</a></div>
</div>

</body>
</html>