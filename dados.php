<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section>
		<?php

		$obj_mysqli = new mysqli("127.0.0.1", "root", "", "crudphp");

		if ($obj_mysqli->connect_errno)
		{
			echo "Ocorreu um erro na conexão com o banco de dados.";
			exit; 
		}

		mysqli_set_charset($obj_mysqli, 'utf8');

    //Vamos realizar o cadastro ou alteração dos dados enviados. 
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$cidade = $_POST["cidade"];
		$uf = $_POST["uf"];
		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y/m/d H:i:s');
		$resolvido = (isset($_POST["resolvido"])) ? 1 : 0;

		$stmt = $obj_mysqli->prepare("INSERT INTO `cliente` (`nome`,`email`,`cidade`,`uf`,`DataRegistro`,`resolvido`) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param('ssssss', $nome, $email, $cidade, $uf, $data, $resolvido);

		if(!$stmt->execute())
		{ 
			$erro = $stmt->error;
		}
		else
		{
			$sucesso = "Dados cadastrados com sucesso!"; 
		}

		$convertResolvido = ($resolvido = 1) ? "SIM" : "NÃO" ;
		

		echo "<strong>Nome: </strong>". $nome ."<br>"; 
		echo "<strong>E-mail: </strong>". $email ."<br>";
		echo "<strong>Cidade: </strong>". $cidade ."<br>";
		echo "<strong>UF: </strong>". $uf ."<br>";
		echo "<strong>Resolvido: </strong>". $resolvido ."<br>";
		echo "<strong>Registrado em: </strong>". $data ."<br><br>";
		echo "<strong>".$sucesso."</strong>";



		?>
		<br>
		<a href="cadastro.php">return cadastro</a>
	</section>
</body>

</html>