<?php include 'database.php';

$stmt = $DBcon ->prepare("SELECT id, descricao, data_limite, concluida FROM tarefas");

$resultSet = [];
if ($stmt->execute()) {
	$rs = $stmt->fetchAll(PDO::FETCH_OBJ);
}

echo json_encode($rs);


/*
if($stmt->execute())
{
	$res="Deu certo:";
	echo json_encode($res);
}
else
{
	$error = "Nao inserido";
	echo json_encode($error);
}*/

?>