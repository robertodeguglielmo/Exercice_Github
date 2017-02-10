<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>

var maFonction = function(event){
	var elem=$( this );
	elem.wrap('<i></i>');
};

var maFonctionH2 = function(event){
	var elem=$( this );
	$('aside').append(elem.text()+'<br>'+elem.attr('class'));

};

var maFonctionImage = function(event){
	var elem=$( this );
	var monHTML="\
				<div id=\"popup1\" class=\"overlay\"> \
					<div class=\"popup\"> \
						<h2>Description</h2> \
						<a class=\"close\" href=\"#\">&times;</a> \
						<div class=\"content\"> \
							<img src=\""+elem.attr('src')+"\"> \
						</div> \
					</div>\
				</div>";
	$('body'	).append(monHTML);
	$('.close'	).on('click',function(event) {
		$('#popup1').remove();
	});
};


$(function(){
	$('p').on('click', maFonction);
	$('H2').on('click', maFonctionH2);
	$('img').wrap("<div class=\"box\"><a class=\"button\" href=\"#popup1\"></a></div>");
	$('img').on('click', maFonctionImage);
});

</script>


<?php

/*require( '../vue/js/popup.js');*/
if (isset($GLOBALS['tb_require'])){
	foreach($GLOBALS['tb_require'] as $key => $element){
		require $element;
	};
};
?>




