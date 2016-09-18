<?php
	require_once("db.class.php");
	class Usuario extends Database{
		function registrar(){
			if($this->conectar()){
				$nombre=$_POST['user'];
				$contrasenya=md5($_POST['password']);
				//var_dump($_POST);
				$_SESSION=$_POST;
				//var_dump($_SESSION);
				$sentencia="INSERT INTO usuario (nombre_usuario,contrasenya) VALUES	('$nombre','$contrasenya')";
				//print $sentencia;
				if($this->consulta($sentencia)){
					//var_dump($_SESSION);
					$this->desconectar();
					$this->iniciar();
				}else{
	 				print "<br>Se ha producido un error al registrarse en la base de datos<br>";
	 	 			print "<br> El error es: " . mysqli_error($this->conectar()) . "<br>";
				}
			
			$this->desconectar();
			}
		}

		function iniciar(){
			if($this->conectar()){
				$tabla="usuario";
				$nombre=$_POST['user'];
				$contrasenya=md5($_POST['password']);
				//var_dump($_POST);
				$sentencia="SELECT * FROM $tabla WHERE nombre_usuario='$nombre' AND contrasenya='$contrasenya'";
				//var_dump($sentencia);
				if($this->consulta($sentencia)){
					//echo "Sentencia correcta";
					$resultado=$this->consulta($sentencia);
					while($objeto=mysqli_fetch_object($resultado)){
						//var_dump($objeto);
						session_start();
						$_SESSION["id"]=$objeto->Id_usuario;
						$_SESSION["user"]=$objeto->nombre_usuario;
						$_SESSION["password"]=md5($objeto->contrasenya);
						$_SESSION['estado'] = 'Logueado'; 
						sleep(0);
						//var_dump($_SESSION);
				 	}
				$this->desconectar();
				}
			}else{
	 			echo "Error al conectar con la base de datos";
			}
		}
		
		function valorar($usuario,$noticia,$pokeball){
			if($this->conectar()){
				$sentencia="INSERT INTO valoracion (Id_usuario, Id_noticia, valor) VALUES ($usuario,$noticia,$pokeball)";
				//var_dump($sentencia);
				if($this->consulta($sentencia)){
					$resultado=$this->consulta($sentencia);
					//var_dump($resultado);
					$this->desconectar();
				}else{
	 				echo "Ya has votado esta noticia";
				}
			}
		}

	}
?>