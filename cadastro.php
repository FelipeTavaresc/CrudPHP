<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD com PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section>
		<form action="dados.php" method="post">
			Nome:<br/> 
			<input type="text" name="nome" placeholder="Qual seu nome?" required><br/><br/>
			E-mail:<br/> 
			<input type="email" name="email" placeholder="Qual seu e-mail?" required><br/><br/>
			Cidade:<br/> 
			<input type="text" name="cidade" placeholder="Qual sua cidade?" required><br/><br/>
			UF:<br/> 
			<input type="text" name="uf" size="2" placeholder="UF" required><br/> 
			RESOLVIDO:
			<input type="checkbox" name="resolvido" value="1" checked>
			<br/><br/>
			<input type="hidden" value="-1" name="id" >
			<button type="submit">Cadastrar</button>
		</form>
	</section>

</body>
</html>