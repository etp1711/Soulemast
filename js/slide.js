window.onload = function(){

	var slide = document.getElementsByClassName('slide').item(0);
	var slidebar = slide.getElementsByClassName('slidebar').item(0);
	var train = slidebar.getElementsByClassName('train').item(0);
	var img = train.getElementsByTagName('img');
	
	var pre = slide.getElementsByClassName('previous').item(0); 
	var next = slide.getElementsByClassName('next').item(0); 
	var currentslide = 0;
	
	slider = function(n){
		if(n>(img.length-1)) n=0;
		if(n<0) n = (img.length-1);
		train.style.left = (-157*n)+'px';
		currentslide = n;
	};
	
	nextslide = function(){
		slider(currentslide+1);
	}
	
	preslide = function(){
		slider(currentslide-1);
	}
	
	
	
	stopSliding = function(){
		if(!intervalName) return;
		clearInterval(intervalName);
		intervalName = false;
	}
	
	next.onclick = nextslide;
	pre.onclick = preslide;	
	
}



// Anchor link for scroll
jQuery.fn.anchorAnimate = function(settings) {

    settings = jQuery.extend({
        speed : 1100
    }, settings);   
    
    return this.each(function(){
        var caller = this
        $(caller).click(function (event) {  
            event.preventDefault()
            var locationHref = window.location.href
            var elementClick = $(caller).attr("href")
            
            var destination = $(elementClick).offset().top;
            $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
                window.location.hash = elementClick
            });
            return false;
        })
    })
}

$(document).ready(function() {
    $("a.anchorLink").anchorAnimate()
});