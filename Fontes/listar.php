<?php 
	session_start();
	//Conexão com banco de dados
	include_once("conexao.php");
	
	echo "<a href='index.php'><button>Cadastrar</button></a><br><br>";
	
	
	echo "<h1>Visitas agendas para o dia de hoje</h1>";
	
	$result_horarios = "SELECT * FROM horarios WHERE DAY(data) = DAY(CURDATE()) AND MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";
	$resultado_horarios = mysqli_query($conn, $result_horarios);
	while($row_horarios = mysqli_fetch_array($resultado_horarios)){
		echo "Descrição: ".$row_horarios['estabelecimento']."<br>";
		echo "Fonte: ".$row_horarios['fonte']."<br>";
		echo "Horário: ".date('d/m/Y H:i:s', strtotime($row_horarios['data']))."<hr>";
	}
	
	echo "<h1>Visitas deste mês</h1>";
	
	$result_horarios = "SELECT * FROM horarios WHERE MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";
	$resultado_horarios = mysqli_query($conn, $result_horarios);
	while($row_horarios = mysqli_fetch_array($resultado_horarios)){
		echo "Descrição: ".$row_horarios['estabelecimento']."<br>";
		echo "Fonte: ".$row_horarios['fonte']."<br>";
		echo "Horário: ".date('d/m/Y H:i:s', strtotime($row_horarios['data']))."<hr>";
	}