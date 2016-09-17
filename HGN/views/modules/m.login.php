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
