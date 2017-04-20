

var AjaxRech = function() 
{
	$input=$(this);
	$form=$input.parent("form");
	$formAction = $form.attr("action");
	$formValeur = $input.val();
	$zoneResult = '#RESULT_'+$input.attr("name");

	$formAction = $formAction.replace('.php', '_ajax.php');

	$.post( $formAction, { RECH_AJAX : $formValeur })
  		.done(function( data ) {$($zoneResult).replaceWith(data);});

};

$( '.RECH' ).on("keyup", AjaxRech );