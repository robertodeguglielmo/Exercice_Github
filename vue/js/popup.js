

var showInfo = function() 
{
	/*$(this).on("click", function(){*/
		
		var form = $( this );
		$('.popup').remove();
		$('body').append('<p class="popup"> <span id="close">[X]</span><br> </p> ');
		$('.popup ').append('<img src="'+$(this).attr('src')+'" > </img>');
		$('section,footer,aside').fadeTo(200,0.2);
		$('.popup').fadeIn(200);


		$('.popup #close').on("click", function(){
			$('section,footer,aside').fadeTo(200,1);
			$('.popup').fadeOut(200);
		});

	/*});*/
	
};

$( 'img' ).on("click", showInfo );