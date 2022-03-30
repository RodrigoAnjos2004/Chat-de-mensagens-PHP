<!DOCTYPE html>
<html>

<head>
	<title>Chat-Simples</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style>
		body {
			margin: 50px
		}

		input[type=text] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
		}

		input[name=mensagem] {
			width: 100%;
			padding: 12px 20px;
			margin: 18px 0;
			box-sizing: border-box;
		}
	</style>



	<script type="text/javascript">
		function ajax() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}

		setInterval(function() {
			ajax();
		}, 1000);
	</script>
</head>

<body onload="ajax();">

<!-- Image and text -->
<nav class="navbar navbar-light ">
  <a class="navbar-brand" href="#">
    <img src="https://www.dds.com.br/blog/wp-content/uploads/sites/2/2014/02/atendimento-via-chat-online.png" width="130" height="90" class="d-inline-block align-top" alt="">
   <strong>test V0.1</strong>  
  </a>
</nav>
	<div id="chat">


	</div>
	<form class="form-group" method="post" action="index.php">
		<input type="text" name="nome" placeholder="Insere o seu nome: ">
		<input type="text" name="mensagem" placeholder="mensagem">
		<center><button type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block">Enviar</button></center>
		<!-- <input type="submit" value="Enviar"> -->

	</form>
	<?php
	include("bd_conect.php");
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];
	$sql = $pdo->query("INSERT INTO cha1 SET nome= '$nome', mensagem= '$mensagem'");


	?>

</body>

</html>
<!-- 𓃰 -->