<?php 
	
	//INCLUINDO OS VALORES DO FORM PAGAMENTO PARA O BANCO DE DADOS 
	include 'conecta_pagamento_mysql.inc';
                                            
	$nome 		 = $_POST['nome'];
	$numero 	 = $_POST['numero'];
	$mes 	 	 = $_POST['mes'];
	$ano 		 = $_POST['ano'];

	$sql = "INSERT INTO pagamento VALUES";
	$sql .= "('$nome','$numero', '$mes', '$ano')";

	if ($conexao->query($sql) === TRUE) {
	echo '<br><br><center><h5><b><img src="img/titulo.png" height="50" width="50" />Mensagem Enviada<img src="img/titulo.png" height="50" width="50"/></h2></b></center><meta http-equiv="refresh" content="1; url=cadastro.html">';
	} 
	else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
	}

	$conexao->close();