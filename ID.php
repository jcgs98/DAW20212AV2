<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">			
			<div class="card text-center mt-1">				
				<div class="card-body">
					<a href="index.php" class="btn btn-primary">Inicio </a>
				</div>				
			</div>
		</div>
		
		<div class="container">			
			<div class="card text-center mt-1">				
				<div class="card-body">
					<a href="PLACA.php" class="btn btn-primary">Ordenar por PLACA </a>					
					<a href="MARCA.php" 	class="btn btn-primary">Ordenar por MARCA	</a>
					<a href="MODELO.php"	class="btn btn-primary">Ordenar por MODELO	</a>	
					<a href="CHASSIS.php" class="btn btn-primary">Ordenar por CHASSIS </a>					
				</div>				
			</div>
		</div>
		
	<?php
		include "conexao.php";
	?>        
		<div class="container">
			<div class="card text-left mt-1">				
				<div class="card-body">					
                    <table class="table table-sm mt-1">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>marca</th>
                                <th>modelo</th>
								<th>qtdAssentos</th>
								<th>temBanheiro</th>
								<th>temArCondicionado</th>                                                                
								<th>chassis</th>
								<th>placa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $Exibe = mysqli_query($con, "SELECT * FROM onibus ORDER BY id");
                                while($r = mysqli_fetch_array($Exibe)):
							?>
                                    <tr>
                                        <td><?php echo $r['id']; ?></td>
										<td><?php echo $r['marca']; ?></td>
										<td><?php echo $r['modelo']; ?></td>
										<td><?php echo $r['qtdAssentos']; ?></td>
										<td><?php echo $r['temBanheiro']; ?></td>
										<td><?php echo $r['temArCondicionado']; ?></td>                                                                                
										<td><?php echo $r['chassis']; ?></td>
										<td><?php echo $r['placa']; ?></td>
                                    </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
				</div>
			</div>			
		</div>       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>