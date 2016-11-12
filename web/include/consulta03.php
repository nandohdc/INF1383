<?php
require_once('/home/grupo320162/public_html/SqlManager.class.php');

//criando conexao
$connection = new SqlManager("connect");

//montar a query
$sql= "SELECT a.genero, COUNT(genero) as total_genero
FROM aluno a
GROUP BY a.genero;";

$result = $connection->executeRead($sql);


if($result){
	$name = array();
	$cpf = array();
	$curso = array();
	$status_inscricao;
	$nLinhas = 0;
	echo count($result);
	foreach($result as $feedback){
		var_dump($feedback);
		$name[$nLinhas] = $feedback['nome'];
		$$cpf[$nLinhas] = $feedback['cpf'];
		$curso[$nLinhas] = $feedback['nome_curso'];
		$status_inscricao = true;
		//var_dump($name);
		//var_dump($cpf);
		//var_dump($curso);
		//var_dump($status_inscricao);
		$nLinhas = $nLinhas + 1;
	}
	
} else{
	
	echo "Erro na Consulta - SQL";
}

//5º Passo - Fechar a conexão
$connection->closeConnection();
?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Feminino', 'Masculino', 'Outros'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, options);
      }
  </script>
  <div id="barchart_material" style="width: 900px; height: 500px;"></div>
