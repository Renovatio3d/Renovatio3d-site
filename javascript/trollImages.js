// JavaScript Document

    
$(document).ready(function(e) {
    

for (i=0;i<myLinksCollection.length;i++) {  
    myLinksCollection[i].onclick = function() {  
       if (this.href.indexOf("trollModel=") !== -1) {  
           var clickedHREF = this.href;  
            var clickedView = clickedHREF.split("trollModel=");  
            ajaxInitiate(clickedView[1]+'.html');  
            return false;  
        }  
   }  
}  

 });