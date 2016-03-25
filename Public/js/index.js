$().ready(function(){
	$('#a_sent').click(function(){
		$('body,html').animate({
			scrollTop:1000
		},200);
		$('#title').focus();
	});
	$(window).scroll(function(){
		if($(window).scrollTop()>500){
			$("#back-to-top").fadeIn(500); 
		}else{
			$("#back-to-top").fadeOut(500); 
		}
	});
	$('#back-to-top').click(function(){
		$('body,html').animate({
			scrollTop:0
		},200);
	});
	
});




// $("#sent").click(function () {
// var speed=200;//滑动的速度
// $('body,html').animate({ scrollTop: 0 }, speed);
// return false;
// });
