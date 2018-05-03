<?php include 'database.php';

$id = $_POST['id'];

$stmt = $DBcon ->prepare("DELETE FROM tarefas WHERE id = :id");
$stmt->bindparam(':id', $id);



if($stmt->execute())
{
	$res="Tarefa deletada!";
	echo json_encode($res);
}
else
{
	$error = "Nao inserido";
	echo json_encode($error);
}

?>