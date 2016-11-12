<?php
require_once('/home/grupo320162/public_html/SqlManager.class.php');

//criando conexao
$connection = new SqlManager("connect");

$sqlContador = "SELECT COUNT(*) AS contador FROM aluno;";

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
$sql= "SELECT a.genero, COUNT(genero) as total_genero
FROM aluno a
GROUP BY a.genero;";

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
        ["Gênero", "Quantidade", { role: "style" }],
		  <?php
		  	foreach($result2 as $row){
				echo "["."'".$row['genero']."'".",".$row['total_genero'].", 'blue'],";
			}?>]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Quantidade por Gênero",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
 </script>
<div id="barchart_values" style="width: 900px; height: 300px;"></div>