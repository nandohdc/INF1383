// JavaScript Document
$("document").ready(function(){
	$("#dynamic_select").change(function(){
		consultaGoTo();
	});
});


function consultaGoTo(){
	var selectedValue = $("#dynamic_select").val();
	
	if(selectedValue == 1){
		$(".aside").load("consultas/consulta01.php");
	}else if(selectedValue == 2){
		$(".aside").load("consultas/consulta02.php");
	}else if(selectedValue == 3){
		$(".aside").load("consultas/consulta03.php");
	}else if(selectedValue == 4){
		$(".aside").load("consultas/consulta04.php");
	}else if(selectedValue == 5){
		$(".aside").load("consultas/consulta05.php");
	}else if(selectedValue == 6){
		$(".aside").load("consultas/consulta06.php");
	}else{
		$(".aside").html('');
	}
}