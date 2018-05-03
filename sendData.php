<?php include 'database.php';

$descricao = $_POST['descricao'];
$dataLimite = $_POST['data_limite'];

$stmt = $DBcon ->prepare("INSERT INTO tarefas (descricao, data_limite, concluida) VALUES (:descricao, :dataLimite, 1)");
$stmt->bindparam(':descricao', $descricao);
$stmt->bindparam(':dataLimite', $dataLimite);


if($stmt->execute())
{
	$res="viva!";
	echo json_encode($res);
}
else
{
	$error = "Nao inserido";
	echo json_encode($error);
}

?>