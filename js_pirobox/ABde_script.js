/*!
*	ABde Custom Jquery
*	
*	Anand Kumaran
*	Web Designer
*	Sagacious Infosystems Private Ltd
*	
*	http://kvijayanand.wordpress.com/
*	http://1stwebdesigner.co.cc/
*
*	Date: 7th January, 2011

*/
$(function() { 
// Simple JQuery Slideshow Gallery 
// Here I have written simple way for gallery slideshow with 4 lines of loop only

var gal_width = 0;		// each li width
var gal_width1 = 0;
var total_width = 0; 	
var li_width;  			// single li width 
var currenturl; 			// value pass next ul position

var $left_arrow = $("#gallery_center .left_arrow img");		// left arrow image
var $right_arrow = $("#gallery_center .right_arrow img");	// right arrow image

var item = $("#gallery li");	// each li object passed to item  

var $cur_ul = $("#gallery ul:first").addClass("current");		

// finding each li width and pass to #gallery
$("#gallery li").each(function(index) {
	gal_width = item.width();
	index++;
	gal_width1 = gal_width + 20;
	total_width = gal_width1 * index;
});    

// dynamic width value pass to #gallery based on number of li 
	$("#gallery").css("width",total_width);	

	// each li width + 20 margin right
	li_width =  item.width(); 	
	li_width = li_width + 20; 
	li_width = li_width * 5; 

// pagination total li
$("#gallery_center .pagination .total").text(item.length);	

var timer = setInterval(slideshow, 5000);

// mouseover and mouseout
$("#photo_gallery ul li img").hover(
	function() {
		clearInterval(timer);		// clear the timer  when mouseover on image 
	},
	function() {
		timer = setInterval(slideshow, 5000);	//	set interval when mouseout from image
	}
);
	
	$right_arrow.click(function() {
		slideshow();		// calling function
	});
	
	$left_arrow.click(function() {
		slideshow1();		// calling funciton 
	});
	
function slideshow() { 
	$cur_ul.animate({marginLeft:"-"+li_width+"px"},3000);
	$cur_ul.removeClass("current");
	currenturl = $cur_ul.next().index();
	$cur_ul = $cur_ul.next().length ? $cur_ul.next().addClass("current")  : $("#gallery ul").animate({marginLeft:"0px"},1000).eq(0).addClass("current");  
	setInterval(page, 2000);	// calling pagination funciton
} 

//  left arrow function
function slideshow1() {		
	$cur_ul.prev().animate({marginLeft: "0px"},3000).removeClass("current");
	$cur_ul.removeClass("current"); 
	currenturl = $cur_ul.prev().index();
	$cur_ul = $cur_ul.prev().length ? $cur_ul.prev().addClass("current") : $("#gallery ul").animate({marginLeft:"0px"},1000).eq(0).addClass("current");  	  
	setInterval(page, 2000);	// calling pagination funciton
} 

// dynamic pagination depends every ul changes
function page() {
x = currenturl;

	if(x == -1)	{
		x = 0;
	}
	x = ((x*1)*5)+1;
	y = x+4;
	
	$("#gallery_center .pagination .cur_li").text(x);
	$("#gallery_center .pagination .last_li").text(y);
}

})(jQuery);