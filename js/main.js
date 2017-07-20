// BOTONERAS RESPONSIVE
$( "#btn_nav-social" ).click(function() {
	$( ".nav-main" ).removeClass( "selected" );
	$( "#nav-social, #bg-socialresponsive" ).toggleClass( "selected" );
});
$( "#btn_nav-main" ).click(function() {
	$( "#nav-social, #bg-socialresponsive" ).removeClass( "selected" );
	$( ".nav-main" ).toggleClass( "selected" );
});