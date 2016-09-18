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

		function listartodas(){
			if($c=$this->conectar()){
				$sentencia="SELECT * FROM noticia";
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
	 				echo "Error con la sentencia listar todas";
				}
			}else{
				echo "Error al conectar con la base de datos";
			}
		}

		function listar($cat){
			if($c=$this->conectar()){
				$sentencia="SELECT * FROM noticia n JOIN not_cat c WHERE n.Id_noticia=c.Id_noticia AND c.Id_categoria=".$cat;
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
	 				echo "Error con la sentencia listar";
				}
			}else{
				echo "Error al conectar con la base de datos";
			}
		}
		function categoria($not){
			if($c=$this->conectar()){
				$sentencia="SELECT * FROM categoria c JOIN not_cat n WHERE n.Id_categoria=c.Id_categoria AND n.Id_noticia=".$not;
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
	 				echo "Error con la sentencia categoria";
				}
			}else{
				echo "Error al conectar con la base de datos";
			}
		}



		function relacionadas($not,$cat){
			if($c=$this->conectar()){
				$sentencia="SELECT * FROM noticia n JOIN not_cat c WHERE n.Id_noticia=c.Id_noticia AND c.Id_categoria=".$cat. " AND n.Id_noticia <>".$not." LIMIT 2";
				//var_dump($sentencia);
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
	 				echo "Error con la sentencia relacionadas";
				}
			}else{
				echo "Error al conectar con la base de datos";
			}
		}
		function valoracion($not){
			if($c=$this->conectar()){
				$sentencia="SELECT valor FROM valoracion WHERE Id_noticia=".$not;
				if($this->consulta($sentencia)){
					$resultado=$this->consulta($sentencia);
					//var_dump($resultado);
					while($objeto=mysqli_fetch_object($resultado)){
						//var_dump($objeto);
						$array[]=$objeto;
					}
					//var_dump($array);
					$this->desconectar();
				}else{
	 				//echo "Error con la sentencia valoración";
				}
				//var_dump($array);
				$valor=0;
				if(sizeof($array)!=0){
					for($i=0;$i<sizeof($array);$i++){
						//var_dump($valor);
						//var_dump($array[$i]->valor);
						$valor=$valor+$array[$i]->valor;
					}
					//var_dump($valor);
					$valor=$valor/sizeof($array);
				}
				return $valor;
			}
		}
	}

?>