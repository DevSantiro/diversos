<?php
	
	include 'class/banco.php';

	class ltDados{
	}
		


	class Funcionario 
	{	
		private $db;
		private $con;

		function __construct() {
			$dbObject = new DB_CONNECT();

			$this->db = $dbObject;
			$this->con = $this->db->getConnection();
    	}

		function getFuncionario(){

			$con = $this->con;

			$query = 'SELECT * FROM funcionario';

			$result = mysqli_query($con,$query);

			$funcionario[] = new ltDados();

			$idx = 0;

			while ($row = mysqli_fetch_assoc($result)) {
				$funcionario[$idx]->id = $row['id'];
				$funcionario[$idx]->nome = $row['nome'];
				$funcionario[$idx]->dtcadastro = $row['dt_cadastro'];				
				$idx++;
			}

			return $funcionario;
		}
	}
?>