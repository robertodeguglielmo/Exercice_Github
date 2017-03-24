

var AjaxRech = function() 
{
	$input=$(this);
	$form=$input.parent("form");
	alert($form.attr("action"));
	alert($input.val());
	
};

$( '.RECH' ).on("keydown", AjaxRech );