var createAllErrors = function() 
{
	var form = $( this );
	var errorList = $( "ul.errorMessages", form );

	errorList.remove();
	form.prepend('<ul class="errorMessages"></ul>');
	errorList = $( "ul.errorMessages", form );

	//Gestion des messages d'erreurs liés au type de champ HTML
	var showAllErrorMessages = function() 
	{

		errorList.empty();
        // Find all invalid fields within the form.
        var invalidFields = form.find( ":invalid" ).each(function( index, node ) 
        {
                // Find the field's corresponding label
                var label = $( "label[for='" + node.id + "'] ");
                var zonelib ='';
                if($(label).length>0){
                	zonelib =label.html();
                }else{
                	zonelib =node.placeholder+' : ';
                }

                var message = node.validationMessage || 'Invalid value.';
                errorList.show().append( "<li><span>" + zonelib+ "  </span> " + message + "</li>" );

        });
    };

	// Envoi du formulaire à sa destination + fermeture du popup + rafraichissement des informations affichées
	form.on( "submit", function( event ) {
		if ( this.checkValidity && !this.checkValidity() ) {
			$( this ).find( ":invalid" ).first().focus();
		}else{
			$.post( form.attr("action"), form.serialize())
  			.done(function( data ) {
    				$('#popup1').remove();
    				$( '.RECH' ).keyup();

  					}
  				)
  		;
		}
		event.preventDefault();
		
	});

	$( "input[type=submit], button:not([type=button])", form ).on( "click", showAllErrorMessages);

	$( "input", form ).on( "keypress", function( event ) {
		var type = $( this ).attr( "type" );
		if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type ) && event.keyCode == 13 ) {
			showAllErrorMessages();
		}
	});
};

var visuPopup = function(event){
	/* Je récupère l'élément sur lequel j'ai cliqué*/
	var elem=$( this );

	/*Je récupère l'ID ainsi que l'ACTION du formulaire */
	$formValeur = $("input[name='RECH_FIC']",elem).attr("value");
	$formAction = $("form",elem).attr("action");
	$formAction = $formAction.replace('.php', '_ajax.php');

	/*Je fais mon call AJAX et j'affiche le POPUP*/
	$.post( $formAction, { RECH_FIC : $formValeur })
  		.done(function( data ) {
			var monHTML="\
						<div id=\"popup1\" class=\"overlay\"> \
							<div class=\"popup\"> \
								<h2>Description</h2> \
								<a class=\"close\" href=\"#\">&times;</a> \
								<div class=\"content\"> \
									"+data+" \
								</div> \
							</div>\
						</div>";
			$('body'	).append(monHTML);
			$('#popup1').visible()
			$('#popup1').css("visibility","visible");
			$('#popup1').css("opacity","1");

			$('#popup1 form').each(createAllErrors);

			$('.close'	).on('click',function(event) {
				$('#popup1').remove();
			});

  		});


};

$( 'body' ).delegate('.RECH_FORM',"click", visuPopup);