(function($){
	$(document).ready(function(){
		var nav = $("nav[role=navigation]");
		var ul = nav.html();
		function rebindNav() {
			nav.find("li").click(function(e){
				e.preventDefault();
				$('body').attr('id',$(this).attr('id').split("-")[1]);
			});
		};
		$('#stylesheet_switcher li').click(function(e){
			e.preventDefault();
			if ($(this).hasClass('active')) return false;
			var prev = $(this).siblings('.active').removeClass('active');
			if (prev.hasClass('both_versions')) {
				nav.html(ul);
				rebindNav();
			}
			$(this).addClass('active');
			$("#version_style").attr("href",$(this).children('a').attr('href'));
			$("#version_title").html($(this).children('a').html());
			if ($(this).hasClass('both_versions')) {
				nav.html(ul+ul)
					.children(":first-child").attr("id","image_version").end()
					.children(":nth-child(2)").attr("id","css_version");
				rebindNav();
			}
		});
		rebindNav();
	});
})(jQuery);