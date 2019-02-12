



addLoadListener(getImage);

function getImage() {
location.hash = clickedView[1]; 
	if (location.hash) {
		ajaxInitiate(location.hash.replace("#","")+".html");
	}

	var myLinksCollection = document.getElementsByTagName("a");

	for (i=0;i<myLinksCollection.length;i++) {
		myLinksCollection[i].onclick = function() {
			if (this.href.indexOf("dragon,trollmodel=") !== -1) {
				var clickedHREF = this.href;
				var clickedView = clickedHREF.split("dragon,trollmodel=");
				ajaxInitiate(clickedView[1]+'.html');
				location.hash = clickedView[1];
				return false;
			}
		}
	}

}

function ajaxInitiate(currentFile) {
var ajaxCapable = getXhrObject();
if (ajaxCapable) {
	ajaxCapable.onreadystatechange = function() {
		serverResponse(ajaxCapable);
	};
	ajaxCapable.open("POST", currentFile, true);
	ajaxCapable.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajaxCapable.send(null);
	}
	else {
		document.getElementById("inner-box").innerHTML += "Your Browser Does not Support Ajax. To view this page, please disable JavaScript.";
	}
}

function serverResponse(ajaxCapable) {
	if (ajaxCapable.readyState == 4) {
		if (ajaxCapable.status == 200 || ajaxCapable.status == 304) {
			document.getElementById("inner-box").innerHTML = ajaxCapable.responseText;
		}
	}
}

function getXhrObject() {  
	var xhrObject = false;
	// Most browsers (including IE7-IE8) use the 3 lines below
	if (window.XMLHttpRequest) {
		xhrObject = new XMLHttpRequest();
	}
	// Internet Explorer 5/6 will use one of the following
	else if (window.ActiveXObject) {
		try {   
		xhrObject = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(err) {
				try {
				xhrObject = new ActiveXObject("Microsoft.XMLHTTP");
				} catch(err) {
				xhrObject = false;
				}
		}
	}
	return xhrObject;
}

// The code below is the load listener that helps run multiple events on the same page. All JS libraries have this built in.
function addLoadListener(fn)
{
	if (typeof window.addEventListener != 'undefined')
	{
	window.addEventListener('load', fn, false);
}
else if (typeof document.addEventListener != 'undefined')
{
	document.addEventListener('load', fn, false);
}
else if (typeof window.attachEvent != 'undefined')
{
	window.attachEvent('onload', fn);
}
else
{
	var oldfn = window.onload;
	if (typeof window.onload != 'function')
	{
	window.onload = fn;
	}
	else
	{
	window.onload = function()
	{
	oldfn();
	fn();
	};
	}
	}
}





		
	$(document).ready(function() {
$(".thumb0").hover(function(){
$(".thumb0").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb0").animate({opacity:'1'},"slow");


}));
});	



	$(document).ready(function() {
$(".thumb1").hover(function(){
$(".thumb1").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb1").animate({opacity:'1'},"slow");


}));
});

	$(document).ready(function() {
$(".thumb2").hover(function(){
$(".thumb2").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb2").animate({opacity:'1'},"slow");


}));
});

	$(document).ready(function() {
$(".thumb3").hover(function(){
$(".thumb3").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb3").animate({opacity:'1'},"slow");


}));
});

	$(document).ready(function() {
$(".thumb4").hover(function(){
$(".thumb4").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb4").animate({opacity:'1'},"slow");

}));
});

	$(document).ready(function() {
$(".thumb5").hover(function(){
$(".thumb5").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb5").animate({opacity:'1'},"slow");

}));
});
		$(document).ready(function() {
$(".thumb6").hover(function(){
$(".thumb6").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb6").animate({opacity:'1'},"slow");

}));
});
	$(document).ready(function() {
$(".thumb7").hover(function(){
$(".thumb7").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb7").animate({opacity:'1'},"slow");

}));
});
	$(document).ready(function() {
$(".thumb8").hover(function(){
$(".thumb8").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb8").animate({opacity:'1'},"slow");

}));
});
	$(document).ready(function() {
$(".thumb9").hover(function(){
$(".thumb9").animate({opacity:'0.6'},"slow");

},(function(){
$(".thumb9").animate({opacity:'1'},"slow");

}));
});	