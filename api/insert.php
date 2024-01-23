<?php include_once('conexao.php');

if(isset($_POST['acao'])){
	


	if($_POST['acao'] == 'cadastrar'){ 

		$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
		$login = mysqli_real_escape_string($conexao, $_POST['login']);
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
		

		$Dados = "INSERT INTO usuarios (nome, login, senha, status) VALUES ('$nome','$login','$senha','1')";      
		$ExDados = mysqli_query($conexao, $Dados);

		$result = json_encode(array('success'=>true, 'expirou'=>false));

	}

	
}else{
	$result = json_encode(array('success'=>false, 'aviso'=>'Parametro não informado!'));
}


echo $result;

?>