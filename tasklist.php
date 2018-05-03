<!DOCTYPE html>
<html>
	<head>
		<title>Task List</title>
		<meta charset="utf-8">
		<meta name="description" content="Aplicativo que salva uma lista de atividades em um banco de dados, com inserção de novos itens e edição e exclusão dos itens já existentes.">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script type="text/javascript" src="funcoesDatabase.js"></script>

		<link rel="stylesheet" type="text/css" href="listaTarefas.css">

		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	</head>
	<body>
		<div class="container">
				<div class="inside-container">
					<h2 class="text-center">Inserir Tarefa</h1>
					<hr/>
					<form method="post" action="" id="form">
					    <div class="form-group">
					        <label for="descricao">Tarefa:</label>
					        <input type="text" id="descricao" class="form-control" name="descricao" placeholder="Descreva sua tarefa" required>
					    </div>
					    <div class="form-group">
					        <label for="data_limite">Data limite:</label>
					        <input type="date" id="data_limite" class="form-control" name="data_limite" value=""	required>
					    </div>
					    <div class="form-group">
					    	<button class="btn btn-info" type="submit">Inserir</button>
					    </div>
					</form>
				</div>
				<hr/>
				<div class="inside-container">
					<h2 class="text-center">Lista de Tarefas</h1>
					<table id="tabela" class="table">
						<thead>
							<tr>
								<th>Tarefa</th>
								<th style="width: 30%">Data Limite</th>
								<th style="width: 15%"></th>
							</tr>
						</thead>
						<tbody>
							<div id="tRows items">

							</div>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>

<style>
</style>

