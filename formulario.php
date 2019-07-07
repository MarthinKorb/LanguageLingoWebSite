<?php

	require_once('db.class.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();


	$sql = " insert into mensagens(nome, email, mensagem) values ('$nome', '$email', '$mensagem') ";
    
    
	//executar a query
	if(mysqli_query($link, $sql)){
		header('Location: index.php#contato');
        echo 'Mensagem enviada com sucesso';
	} else {
		echo 'Erro ao enviar a mensagem!';
	}


?>



