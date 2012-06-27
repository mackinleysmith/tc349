(function($){
	var img = new Image();
	var url = 'images/Grunge_gray_02.jpg';
	$(document).ready(function(){
		// Wrap
		var wrap = $('<div />').attr('id','wrap').html($('body').html());
		$('body').html("").append(wrap);
		
		// Header
		var header = $('<header />').prependTo(wrap);
		var logo = $('<img />').attr({id:'logo',src:'images/logo.png'}).click(function(){window.location="index.html";}).appendTo(header);
		var nav = $('<nav role="navigation" />').appendTo(header);
		var nav_ul = $('<ul />').appendTo(nav);
		$.each({
			"Home":"index.html",
			"About":"about.html",
			"Our Work":"#",
			"Testimonials":"#",
			"Contact":"contact.html"
		},function(html,href){var li = $('<li />').html("<a href='"+href+"'>"+html+"</a>").click(function(e){if ($(e.target).is("li")) window.location = href;}).appendTo(nav_ul);});
		
		// Footer
		var footer = $('<footer />').html("<p>Copyright &copy; 2012 <a href='http://www.mackinleysmith.com/' target='_blank'>MacKinley Smith</a>.  All rights reserved.</p>").appendTo(wrap);
		
		// Background
		var background = $('<div />').attr('id','background').prependTo($('body'));
		$(img).attr('src',url).load(function(){
			$(this).hide();
			background.css('background-image','url('+url+')').animate({opacity:.8},800);
		});
	});
})(jQuery);