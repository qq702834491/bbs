$().ready(function(){
	$('.dropdown').eq(0).mouseenter(function(){
		$('.dropdown-menu').eq(0).toggle();
	});
	$('.dropdown').eq(0).mouseleave(function(){
		$('.dropdown-menu').eq(0).toggle();
	});
	$('.dropdown').eq(1).mouseenter(function(){
		$('.dropdown-menu').eq(1).toggle();
	});
	$('.dropdown').eq(1).mouseleave(function(){
		$('.dropdown-menu').eq(1).toggle();
	});
});