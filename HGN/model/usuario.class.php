<?php
	require_once("db.class.php");
	class Usuario extends Database{
		function registrar(){
			if($this->conectar()){
				$nombre=$_POST['nombre_usuario'];
				$contrasenya=md5($_POST['contrasenya']);
				
				$_SESSION=$_POST;

				$sentencia="INSERT INTO usuario (Nombre,Contrasenya) VALUES
					('$nombre','$contrasenya'";
				//print $sentencia;
				if($this->consulta($sentencia)){
					//var_dump($_SESSION);
					$this->desconectar();
					$this->login();
				}else{
	 				print "<br>Se ha producido un error al registrarse en la base de datos<br>";
	 	 			print "<br> El error es: " . mysqli_error($c) . "<br>";
				}
			
			$this->desconectar();
			}
		}

		function iniciar(){
			if($this->conectar()){
				$tabla="usuario";
				$nombre=$_POST['nombre'];
				$contrasenya=md5($_POST['contrasenya']);
				$sentencia="SELECT * FROM $tabla WHERE Nombre='$nombre' AND Contrasenya='$contrasenya'";
				//var_dump($sentencia);
				if($this->consulta($sentencia)){
					//echo "Sentencia correcta";
					$resultado=$this->consulta($sentencia);
					while($objeto=mysqli_fetch_object($resultado)){
						//var_dump($objeto);
						session_start();
						$_SESSION["nombreusuario"]=$objeto->Nombre;
						$_SESSION["contrasenya"]=md5($objeto->Contrasenya);
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
				$sentencia="INSERT INTO valoracion (Id_usuario, Id_noticia, valor) VALUES $usuario,$noticia,$pokeball";
				if($this->consulta($sentencia)){
					$resultado=$this->consulta($sentencia);
					//var_dump($resultado);
					$this->desconectar();
				}else{
	 				echo "Error con la sentencia";
				}
			}
		}

	}
?>