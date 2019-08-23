<html>
	<head>
		<meta charset="UTF-8">
		<title>To Tiltado</title>
	</head>
	<body>
		<fieldset fieldset style = "width: 20%; margin-left:700px;
		margin-top:250px;">
		<?php
		if (empty($_POST)) {
			echo "<h1>Preencha os campos abaixo:</h1>";
		}
		else{
			echo "<h1>Nome: " .$_POST['nome']."</br>";
			echo "Idade: " .$_POST['idade']."</br>";
			echo "E-mail: " .$_POST['email']."</br></h1>";
			echo "<h2>Preencha um novo registro:</h2>";
		}
		?>
		<form action="algo.php" = method="post">
	    <div>
	        <label for="nome">Nome:</label>
	        <input type="text" name="nome" oninvalid="alert('Você deve preencher os campos!');" required/>
	    </div>
	    <br>
	    <div>
	        <label for="idade">Idade:</label>
	        <input type="text" name="idade" oninvalid="alert('Você deve preencher os campos!');" required/>
	    </div>
	    <br>
	    <div>
	        <label for="email">E-mail:</label>
	        <input type="text" name="email" oninvalid="alert('Você deve preencher os campos!');" required/>
	    </div>
	    <br>
	     <div>
	        <button onclick="alerta()"type="submit">Enviar</button>
	        <button onclick="conf()" type="reset">Limpar</button>
	    </div>
		</form>
		</fieldset>
		<script>
		function conf(){
		var x;
		var r=confirm("Limpar ?");
		if (r==true)
		  {
		  x="Confirmado";
		  }
		else
		  {
		  x="Não Confirmado";
		  }
		document.getElementById("demo").innerHTML=x;
		}
		function alerta(){
		alert("Enviado!");
		}
		</script>
	</body>
</html>