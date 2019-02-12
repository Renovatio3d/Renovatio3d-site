// JavaScript Document


$(document).ready(function(e) {
  $(".pipeline").click(function(){
	  $(".breakdown-list").fadeIn();
	  $(".breakdown-list").animate({bottom:'10px'},"slow").show();
	  $(".pipeline,.next-image").animate({top:'16px'},"slow");
	  });  

});
   