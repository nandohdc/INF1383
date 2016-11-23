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
$sql= "SELECT * FROM aluno;";
$result2 = $connection->executeRead($sql);

if(!$result2){
	echo "Erro na Consulta - SQL";
}
$connection->closeConnection();
?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nome');
        data.addColumn('string', 'CPF');
		data.addColumn('string', 'Curso');
        data.addRows(<?php echo $nLinhas?>);
		<?php	  	
			$i = 0;
		  	foreach($result2 as $row){?>
				data.setValue(<?php echo $i ?>, 0, '<?php echo $row["nome"] ?>');
		  		data.setValue(<?php echo $i ?>, 1, '<?php echo $row["cpf"] ?>');
		  		data.setValue(<?php echo $i ?>, 2, '<?php echo $row["nome_curso"] ?>');
		  		<?php
				$i= $i + 1;
			}?>

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
</script>
<div id="table_div"></div>