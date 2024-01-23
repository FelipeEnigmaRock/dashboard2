<?php include_once('conexao.php');

if(isset($_POST['acao'])){


	
	if($_POST['acao'] == 'consult_usuarios'){ 

		if($_POST['filtro'] == 0){ 
		    $Consulta = "select * from usuarios"; // chamar todos os registros
		}else{ 
		    $Consulta = "select * from usuarios where id = $_POST[filtro]"; // chamar apenas o registro referente ao id que vem na variavel filtro
		}

		$ExConsulta = mysqli_query($conexao, $Consulta); // O que seria isso ?
		while($DadosConsulta = mysqli_fetch_assoc($ExConsulta)){  // o que seria essa linha?
				
			$dados[] = array(
				'id' => $DadosConsulta['id'],
				'nome' => $DadosConsulta['nome'],
				'login' => $DadosConsulta['login'],
				'senha' => $DadosConsulta['senha'],
				'status' => $DadosConsulta['status'],
			);
		}

		$result = json_encode(array('success'=>true, 'dados'=>$dados, 'expirou'=>false));// Essa linha?
		
	}


		
}else{
	$result = json_encode(array('success'=>false, 'aviso'=>'Ação não informado!'));// essa linha?
}


echo $result;



	



 ?>