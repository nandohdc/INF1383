<?php
require_once('/home/grupo320162/public_html/SqlManager.class.php');

//criando conexao
$connection = new SqlManager("connect");

$sqlContador = "SELECT COUNT(*) AS contador FROM todos_alunos_cpf_cursos_aprovados;";

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
$sql= "SELECT * FROM todos_alunos_cpf_cursos_aprovados;";
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
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Salary');
        data.addColumn('boolean', 'Full Time Employee');
        data.addRows([
          ['Mike',  {v: 10000, f: '$10,000'}, true],
          ['Jim',   {v:8000,   f: '$8,000'},  false],
          ['Alice', {v: 12500, f: '$12,500'}, true],
          ['Bob',   {v: 7000,  f: '$7,000'},  true]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
</script>
<div id="table_div"></div>