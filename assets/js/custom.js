$(function() {
	
	// Main Menu 
	$(window).scroll(function(){
		if($(window).scrollTop()>300){
		  $("#main_menu").addClass('scroll-menu');
		}else{
		  $("#main_menu").removeClass('scroll-menu');
		}
   });
   
   
});