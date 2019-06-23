<?php 
	
	//INCLUINDO OS VALORES PARA O BANCO DE DADOS 
	include 'conecta_cadastro_mysql.inc';
                                            
	$nome 		 = $_POST['nome'];
	$sobrenome 	 = $_POST['sobrenome'];
	$endereco 	 = $_POST['endereco'];
	$cidade 	 = $_POST['cidade'];
	$estado  	 = $_POST['estado'];
	$email  	 = $_POST['email'];
	$celular 	 = $_POST['celular'];

	$sql = "INSERT INTO cadastro VALUES";
	$sql .= "('$nome','$sobrenome', '$endereco', '$cidade', '$estado','$email','$celular')";

	if ($conexao->query($sql) === TRUE) {
	echo '<br><br><center><h5><b><img src="img/titulo.png" height="50" width="50" />Cadastro Efetuado<img src="img/titulo.png" height="50" width="50"/></h2></b></center><meta http-equiv="refresh" content="1; url=cadastro.html">';
	} 
	else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
	}

	$conexao->close();

