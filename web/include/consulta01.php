<?php
require_once('/home/grupo320162/public_html/SqlManager.class.php');

//criando conexao
$connection = new SqlManager("connect");

$sqlContador = "SELECT COUNT (*) AS contador FROM quantidade_alunos_por_curso;";

$result = $connection->executeRead($sqlContador);

if($result){
	$nLinhas = 0;
	foreach($result as $row){
		$nLinhas = $row['contador'];
	}
	
} else{
	
	echo "Erro na Consulta - SQL";
}


//montar a query
$sql= "SELECT * FROM quantidade_alunos_por_curso";
$result2 = $connection->executeRead($sql);

if(!$result2){
	echo "Erro na Consulta - SQL";
}
$connection->closeConnection();
?>

 <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Curso', 'Inscritos por Total'],			
			<?php
			$i = 0;
		  	foreach($result2 as $row){
				if($i < ($nLinhas - 1)){
					echo "["."'".$row['nome_curso']."'".",".$row['total_curso']."],";
					$i = $i + 1;
				}
				else{
					echo "["."'".$row['nome_curso']."'".",".$row['total_curso']."]";
					$i = $i + 1;
				}
			}?>]);
		  

        var options = {
          title: 'Cursos de Alunos Inscritos - PUC- Rio',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
</script>


<div id="piechart_3d" style="width: 800px; height: 500px;"></div>
