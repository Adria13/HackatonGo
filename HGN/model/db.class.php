<?php
class Database{
	private $conexion;
	public function conectar(){
		$this->conexion=mysqli_connect("localhost","root","","pokemonbd");
		//$this->conexion=mysqli_connect("...:","usuario","","nombre");
		$acentos=mysqli_query($this->conexion, "SET NAMES 'utf8'");
		return $this->conexion;
	}
	public function consulta($sentencia){
		$resultado=mysqli_query($this->conexion,$sentencia);
		return $resultado;
	}
	public function numero_filas($resultado){
		mysqli_num_rows($resultado);
	}
	public function fetch_assoc($resultado){
		mysqli_fetch_assoc($resultado);
	}
	public function desconectar(){
		mysqli_close($this->conexion);
	}
}
?>