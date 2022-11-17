<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Fonte de Pesquisas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	</head>
		<style>
			body{
				background-color: #E0FFFF;
			}
			h1{
				text-align: left;
				padding-left: 17%;
				font-weight: bold;
			}
			.listar{
				padding-left: 200px;			
			}

			
		</style>

	<body>
	
		<div class="container">
			<div class="listar">
				<br><br><a href='listar.php'><button class="btn btn-success">Listagem de Pesquisas</button></a><br><br>
			</div>
			<h1>Cadastrar Pesquisa</h1>
			<br><br>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form class="form-horizontal" action="processa.php" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Descrição da Pesquisa</label>
					<div class="col-sm-10">
						<input type="text" name="estabelecimento" class="form-control" id="inputEmail3" placeholder="Descrição da Pesquisa">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Fonte</label>
					<div class="col-sm-10">
						<input type="text" name="fonte" class="form-control" id="inputEmail3" placeholder="Fonte Pesquisada">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Data e Hora</label>
					<div class="col-sm-10">
						<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
							<input type="text" class="form-control" name="data" placeholder="Data e Hora da visita">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</span>
							
						</div> 
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>
				</div>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
		<script type="text/javascript">
			$('.data_formato').datetimepicker({
				weekStart: 1,
				todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1,
                language: "pt-BR",
                //startDate: '+0d'
			});
		</script>
	
	</body>
</html>