<html>
<head>
	<meta charset="UTF-8">
	<title>login o registro</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
	<a href="PagHome.php"><img id="logo" src="img/logo.png"></img></a>
	<a href="PagNew.php"><img class="cat" src="img/actua.png"></img></a>
	<a href="PagNew.php"><img class="cat" src="img/sucesos.png"></img></a>
	<a href="PagNew.php"><img class="cat" src="img/trucos.png"></img></a>
	<a href="loginregistro.php"><img id="dex" src="img/pokedex1.png" onmouseover="this.src='img/dex2.png';" onmouseout="this.src='img/Pokedex1.png';"/></img></a>

	<div id="linea1"></div>	
</header>


	<div class="form" >	
		<div id="login"><p>¡Entra!</p>
				<form action="../controller/login.php" method="post">
				<label for="user">Usuario: </label><br>
				<input type="text" name="user" required/><br>
				<label for="password">Contraseña: </label><br>
				<input type="password" name="password"/ required><br>
				<input type="submit" value="Login">
				</form>
		</div>

	
	
		<div id="registro"><p>¿No tienes usuario? ¡Regístrate!</p>
				<form action="../controller/register.php" method="post">

				<label for="user">Usuario: </label><br>
				<input type="text" name="user" placeholder="Nombre que verá la gente" required/><br>
				<label for="password">Contraseña: </label><br>
				<input type="password" name="password" minlength="4" maxlength="8" required/><br>
				<input type="submit" value="Registrarse">
				</form>
		</div>	
	</div>

	<footer>
		<p>Hackathon GO NEWS | <a href="http://www.pokemongo.com/es-es/">Pokemon GO official web</a></p>

	</footer>

</body>
</html>