<?php
	require_once("db.class.php");
	class Noticia extends Database{
		function mostrar($id){
			if($c=$this->conectar()){
				$sentencia="SELECT * FROM noticia WHERE Id_noticia=".$id;
				if($this->consulta($sentencia)){
					$resultado=$this->consulta($sentencia);
					//var_dump($resultado);
					while($objeto=mysqli_fetch_object($resultado)){
						//var_dump($objeto);
						$array[]=$objeto;
					}
					//var_dump($array);
					$this->desconectar();
					return $array;
				}else{
	 				echo "Error con la sentencia";
				}
			}else{
				echo "Error al conectar con la base de datos";
			}
		}

		function resumen(){

		}
		function listar($cat){
			if($c=$this->conectar()){
				$sentencia="SELECT * FROM noticia n RIGHT JOIN categoria c WHERE n.Id_noticia=c.Id_noticia AND c.Id_categoria=".$cat;
				if($this->consulta($sentencia)){
					$resultado=$this->consulta($sentencia);
					//var_dump($resultado);
					while($objeto=mysqli_fetch_object($resultado)){
						//var_dump($objeto);
						$array[]=$objeto;
					}
					//var_dump($array);
					$this->desconectar();
					return $array;
				}else{
	 				echo "Error con la sentencia";
				}
			}else{
				echo "Error al conectar con la base de datos";
			}
		}
		function valoracion(){

		}
	}

?>