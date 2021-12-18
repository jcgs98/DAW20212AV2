<?php
	$con = mysqli_connect("localhost", "root", "", "av1");
	
	if (isset($_POST['altera'])) {
	    $id = $_POST['id'];
	    $marca = $_POST['marca'];
	    $modelo = $_POST['modelo'];
	    $qtdAssentos = $_POST['qtdAssentos'];
	    $temBanheiro = $_POST['temBanheiro'];
	    $temArCondicionado = $_POST['temArCondicionado'];
	    $chassis = $_POST['chassis'];
	    $placa = $_POST['placa'];		
		
	    $query = mysqli_query($con, "SELECT * FROM onibus WHERE (id = '$id' OR chassis = '$chassis' OR placa = '$placa')");
		
    if (mysqli_num_rows($query)){ $query = mysqli_query($con, "UPDATE onibus SET qtdAssentos ='$qtdAssentos', temBanheiro = '$temBanheiro', temArCondicionado = '$temArCondicionado' WHERE (id = '$id' OR chassis = '$chassis' OR placa = '$placa');");			
        if ($query) {echo "<script>alert('Onibus Atualizado!')</script>";}
            else {echo "<script>alert('Erro!')</script>";}}
                else {echo "<script>alert('Onibus não!')</script>";}
                    header("location:alteraOnibus.php");}	
?>
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
					<a href="alterOnibus.php" 	class="btn btn-primary">Alterar	onibus	</a>
					<a href="listaOnibus.php"	class="btn btn-primary">Listar	onibus	</a>	
					<a href="index.php"			class="btn btn-primary">Início			</a>
				</div>
			</div>
		</div>	

        <div class="container">                
            <div class="card text-center mt-1">                
                <div class="card-body">                    
                    <form class="mt-2" method="POST" action="alteraOnibus.php">
                        <input type="text" name="id" placeholder="Buscar por ID"> <br><br>
                        <input type="text" name="chassis" placeholder="Buscar por CHASSIS"> <br><br>
                        <input type="text" name="placa" placeholder="Buscar por PLACA"> <br><br>
                        <input type="text" name="qtdAssentos"placeholder="Nova Quantidade de Assentos:">                        
                        <input type="text" name="temBanheiro"placeholder="Tem Banheiro? (S)im ou (N)ão?">
						<input type="text" name="temArCondicionado"placeholder="Tem Ar Condicionado? (S)im ou (N)ão?">	<br><br>
                        <input type="submit" 	name="altera"	class		=	"btn btn-primary"		value	=	"Atualizar Onibus">                        
                    </form>                    
                </div>                
            </div>
        </div>
  </body>
</html>