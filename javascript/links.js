
$(document).ready(function() {
	$("#fbtn").mouseenter(function(e) 
			{
			$("#foward").animate({left:'-72px',opacity:'100px'},"slow");			 			
		});
			$("#foward").mouseleave(function(){
			$("#foward").animate({left:'-100px',opacity:'100px'},"slow");
		});
});
		