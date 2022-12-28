<?php
class Database{
	private static $db_host = "localhost";
	private static $db_user = "root";
	private static $db_pass = "root";
	private static $db_name = "filmoteca";

	private $con;
	private $resultado;
	private $numero_filas;

	public function __construct(){
		$this->con = new mysqli(self::$db_host, self::$db_user, self::$
			db_pass, self::$db_name);
	}

	public function disconnect(){
		$this->con->close();
	}

	public function obetener_pelis(){
		$consulta = "select id_pelicula, titulo, nombre, sinopsis from
			pelicula, director, where director=id_director";
			$this->resultado = $this->con->query($consulta);
			if($this->resultado){
				$this->numero_filas = $this->resultado->num_rows;
			}
	}

	public function obetener_directores(){
		$consulta = "select * from director";
			$this->resultado = $this->con->query($consulta);
			if($this->resultado){
				$this->numero_filas = $this->resultado->num_rows;

			}

	}
}
?>