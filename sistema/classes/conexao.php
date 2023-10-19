<?php 

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "sistema_2023";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>