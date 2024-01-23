<?php include_once('conexao.php');


if(isset($_POST['acao'])){

	
	if($_POST['acao'] == 'editar_dados'){

		$id = mysqli_real_escape_string($conexao, $_POST['id']);// Enviando para banco de dados?
		$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
		$login = mysqli_real_escape_string($conexao, $_POST['login']);
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

		$Editar = ("UPDATE usuarios SET nome='$nome', login='$login', senha='$senha' WHERE id = '$id'");
		$ExEditar = mysqli_query($conexao, $Editar);//??
			
		$result = json_encode(array('success'=>true, 'expirou'=>false));
		
	}

			
}else{
	$result = json_encode(array('success'=>false, 'aviso'=>'Ação não informado!'));
}



echo $result;



	



 ?>