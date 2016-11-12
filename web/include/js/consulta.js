// JavaScript Document
$("document").ready(function(){
	$("#dynamic_select").change(function(){
		consultaGoTo();
	});
});


function consultaGoTo(){
	var selectedValue = $("#dynamic_select").val();
	
	if(selectedValue == 1){
		$(".aside").load("../../include/consulta01.php");
	}else if(selectedValue == 2){
		$(".aside").load("../../include/consulta02.php");
	}else if(selectedValue == 3){
		$(".aside").load("../../include/consulta03.php");
	}else if(selectedValue == 4){
		$(".aside").load("../../include/consulta04.php");
	}else if(selectedValue == 5){
		$(".aside").load("../../include/consulta05.php");
	}else if(selectedValue == 6){
		$(".aside").load("../../include/consulta06.php");
	}else{
		$(".aside").html('');
	}
}