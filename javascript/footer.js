 /*
$(document).ready(function(){
		
		 $(".following").hover(function(){

  $(".links").animate({opacity:'100px',bottom:'38px'},"slow").slideToggle();
  
  
		 });
});*/
	$(document).ready(function() {
	$(".following").mouseenter(function(e) 
			{
			$(".links").animate({bottom:'38px'},"slow").slideToggle();
						 			
	});
			$(".following").mouseleave(function(){
			$(".links").animate({opacity:'100px',bottom:'22px'},"slow").slideToggle();
			
		});
		
		
			$("#twitter").mouseenter(function(e) 
			{
			$(".arc #twitter ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#tweet").css("opacity","100").fadeIn("slow");		 			
	});
	$(" .arc #twitter").mouseleave(function(e) 
			{
			$(" #twitter ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#tweet").css("display","none");			 			
	});


		$("#facebook").mouseenter(function(e) 
			{
			$(".arc #facebook ").animate({opacity:'100px',marginLeft:'-45px'},"slow");	
			$("#face").css("opacity","100").fadeIn("slow");
				 			
	});
	$(" .arc #facebook").mouseleave(function(e) 
			{
			$(" #facebook ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#face").css("display","none");
					 			
	});
	
		$("#mail").mouseenter(function(e) 
			{
			$(".arc #mail ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#email").css("opacity","100").fadeIn("slow");		 			
	});
	$(" .arc #mail").mouseleave(function(e) 
			{
			$(" #mail ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#email").css("display","none");			 			
	});
	
		$("#linkedin").mouseenter(function(e) 
			{
			$(".arc #linkedin ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#in").css("opacity","100").fadeIn("slow");		 			
	});
	$(" .arc #linkedin").mouseleave(function(e) 
			{
			$(" #linkedin ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#in").css("display","none");			 			
	});
	
			$("#youtube").mouseenter(function(e) 
			{
			$(".arc #youtube ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#videos").css("opacity","100").fadeIn("slow");			 			 			
	});
	$(" .arc #youtube").mouseleave(function(e) 
			{
			$(" #youtube ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#videos").css("display","none");			 			
	});
		
				$("#vimeo").mouseenter(function(e) 
			{
			$(".arc #vimeo ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#video").css("opacity","100").fadeIn("slow");			 			
	});
	$(" .arc #vimeo").mouseleave(function(e) 
			{
			$(" #vimeo ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#video").css("display","none");				 			
	});
		
				$("#behance").mouseenter(function(e) 
			{
			$(".arc #behance ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#be").css("opacity","100").fadeIn("slow");			 			
	});
	$(" .arc #behance").mouseleave(function(e) 
			{
			$(" #behance ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#be").css("display","none");			 			
	});
		
		
				$("#flickr").mouseenter(function(e) 
			{
			$(".arc #flickr ").animate({opacity:'100px',marginLeft:'-45px'},"slow");
			$("#imgs").css("opacity","100").fadeIn("slow");			 			
	});
	$(" .arc #flickr").mouseleave(function(e) 
			{
			$(" #flickr ").animate({opacity:'100px',marginLeft:'0px'},"slow");
			$("#imgs").css("display","none");			 			
	});
			
});	

/*
$(document).ready(function()
{
$.ajax({ cache:false;});  
var ajax-load ="<img class='loading' src ='img/loading.gif' alt='loading...'/>";
var loadUrl ="library.html .ajax-content";
$("#next-page").hide("show");
}));
$("bbtn").click(function()
{
$(".content").animate({right:'900px'},"slow").slideToggle();
$(".content").fadeTo("slow"0);
$(#"fbtn").animate({opacity:'100px';},"fast");
},
$("#next-page").fadeTo("slow" 100);
$("#next-page").animate({height:'800px';},"slow").slideToggle();
$(".content").hide("slow");
}));
});
});
<!--Loading In our AJAX-->
var ajax-load ="<img class ='loading' src ='img/loading.gif' alt =' loading..'/>"; */