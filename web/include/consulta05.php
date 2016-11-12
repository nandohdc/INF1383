<?php
require_once('/home/grupo320162/public_html/SqlManager.class.php');

//criando conexao
$connection = new SqlManager("connect");

$sqlContador = "SELECT COUNT(*) AS contador  
FROM projeto p, aluno a, inscricao i
WHERE a.cpf = i.cpf_aluno
AND
p.nome = i.nome_projeto
AND
i.status_inscricao = 'Aprovada';";

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
$sql= "SELECT p.nome, a.nome, i.status_inscricao 
FROM projeto p, aluno a, inscricao i
WHERE a.cpf = i.cpf_aluno
AND
p.nome = i.nome_projeto
AND
i.status_inscricao = 'Aprovada'";

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
        data.addColumn('string', 'Nome do Projeto');
        data.addColumn('string', 'Nome do Aluno');
        data.addColumn('boolean', 'Status de Inscrição');
        data.addRows(<?php echo $nLinhas; ?>);  
		  <?php	  	
			$i = 0;
		  	foreach($result2 as $row){?>
				data.setValue(<?php echo $i ?>, 0, '<?php echo $row[0] ?>');
		  		data.setValue(<?php echo $i ?>, 1, '<?php echo $row["nome"] ?>');
		  		data.setValue(<?php echo $i ?>, 2, true);
		  		<?php
				$i= $i + 1;
			}?>

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
</script>
<div id="table_div"></div>