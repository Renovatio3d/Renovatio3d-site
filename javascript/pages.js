

$(document).ready(function() {
	$("#fbtn").mouseenter(function(e) 
			{
			$("#foward").animate({left:'-72px',opacity:'100px'},"slow");			 			
		});
			$("#foward").mouseleave(function(){
			$("#foward").animate({left:'-100px',opacity:'100px'},"slow");
		});
			$("#bbtn").mouseenter(function(e) 
			{
	        $("#backward").animate({right:'-72px',opacity:'100px'},"slow");		
			});
			$("#backward").mouseleave(function(){
			$("#backward").animate({right:'-100px',opacity:'100px'},"slow");
		});
	});		 
		
///////////////////////////////
