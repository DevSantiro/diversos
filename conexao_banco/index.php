<?php
	error_reporting(0);

	include 'class/funcoes.php';

	$objFuncionario = new Funcionario();

	$dados = $objFuncionario->getFuncionario();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="static/css/mycss.css">
	<script type="text/javascript" src="static/js/meujs.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div id="principal">
		
		<div id="lista-func">
			<table class="table-css">
				<thead>
					<th width="60">#</th>
					<th width="300">Nome</th>
					<th width="150">Data Cadastro</th>
				</thead>
				<tbody>
					<?php 
						foreach ($dados as $idx => $value) {
							echo('<tr class="table-dados" onclick="selecFunc('.$dados[$idx]->id.')">');
							echo('<td>'.$dados[$idx]->id.'</td>');
							echo('<td>'.$dados[$idx]->nome.'</td>');
							echo('<td>'.$dados[$idx]->dtcadastro.'</td>');
							echo('</tr>');
						}
					?>
				</tbody>
			</table>
		</div>

		<div id="control-func">
			<h1>Exemplo Conecta Banco usando Objetos</h1>
			<!-- <iframe style="display: none;" src="controle.php" width="100%"></iframe> -->
		</div>

	</div>
</body>
</html>