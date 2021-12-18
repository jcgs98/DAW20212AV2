<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="card text-center mt-1">
				<div class="card-body">					
					<a href="incluirOnibus.php" class="btn btn-primary">Incluir	onibus	</a>
					<a href="alteraOnibus.php" 	class="btn btn-primary">Alterar	onibus	</a>
					<a href="listaOnibus.php"	class="btn btn-primary">Listar	onibus	</a>		
				</div>
			</div>
		</div>
		<div class="container">
		<div class="card text-center mt-1">
			<div class="card-body">
				<form class="mt-1" method="POST" action="incluirOnibus.php">	
					<input type="text"		name="id"					placeholder	=	"id">
					<input type="text"		name="marca"				placeholder	=	"marca">
					<input type="text"		name="modelo"				placeholder	=	"modelo"><br><br>
					<input type="text"		name="qtdAssentos"			placeholder	=	"qtdAssentos">
					<input type="text"		name="temBanheiro"			placeholder	=	"temBanheiro">
					<input type="text"		name="temArCondicionado"	placeholder	=	"temArCondicionado">		<br><br>
					<input type="text"		name="chassis"				placeholder	=	"chassis">		<br><br>
					<input type="text"		name="placa"				placeholder	=	"placa">		<br><br>
					<input type="submit" 	name="submit"				class		=	"btn btn-primary"		value	=	"Incluir Onibus">
				</form>
			</div>
		</div>		
					<?php
						$con = mysqli_connect("localhost", "root", "", "av1");                     
						if (($_POST) && ($_POST['submit'])) {
						    $id                   = $_POST['id'];
						    $marca                = $_POST['marca'];
						    $modelo               = $_POST['modelo'];
						    $qtdAssentos          = $_POST['qtdAssentos'];
						    $temBanheiro          = $_POST['temBanheiro'];
						    $temArCondicionado    = $_POST['temArCondicionado'];
						    $chassis              = $_POST['chassis'];
						    $placa		          = $_POST['placa'];
						    echo($id!=""&&$marca!=""&&$modelo!=""&&$qtdAssentos!=""&&$temBanheiro!=""&&$temArCondicionado!=""&&$chassis!=""&&$placa!="")?
								(mysqli_query($con, "	INSERT INTO onibus (id, marca, modelo, qtdAssentos, temBanheiro, temArCondicionado, chassis, placa )
								    VALUES ('$id','$marca','$modelo','$qtdAssentos', '$temBanheiro', '$temArCondicionado', '$chassis', '$placa')"))?
								"<script>alert('Ônibus inserido com sucesso!')</script>":
								"<script>alert('Erro, ônibus não inserido!')</script>":
								"<script>alert('Preencha todos os campos!')</script>";
						}
                    ?>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
