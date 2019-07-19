$(function(){
	$('#cod').mask("#", {reverse: true});
	$('#price').mask("#.##0,00", {reverse: true}); 
	$('#quantity, #min_quantity').mask("#.##0,000", {reverse: true});
});
