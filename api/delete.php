<?php include_once('conexao.php');


if(isset($_POST['acao'])){
	


	if($_POST['acao'] == 'deletar_usuario'){ 
		$Usuario = "DELETE FROM usuarios WHERE id = '$_POST[id]'";
		$ExUsuario = mysqli_query($conexao, $Usuario);

		$result = json_encode(array('success'=>true, 'expirou'=>false));
	}


}else{
	$result = json_encode(array('success'=>false, 'aviso'=>'Parametro não informado!'));
}

echo $result;

?>