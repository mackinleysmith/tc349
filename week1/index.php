<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>The Morning News</title>
	<link type="text/css" rel="stylesheet" media="screen" href="style.css" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	(function($){$(document).ready(function(){
		$(".cover_photo").each(function(){if ($(this).html() == "") $(this).css("display","block");});
	});})(jQuery);
	</script>
</head>
<body>
	<div id="top_red_bar">
		<div id="inner_red_bar">
			<p>Now Available: <a href='#'>Poop</a> by <a href='#'>TMN's Buttholes</a>. <a href='#'>Amazon</a> / <a href='#'>Stores</a> / <a href='#'>Whatever else</a></p>
		</div>
	</div>
	<div id="main_content">
		<header>
			<div id="header_left">
				<a href='#'><img src="images/logo.jpg" id="logo" /></a>
				<p id="hashtags">
					Currently: 
					<a href="#">#galleries</a>
					<a href="#">#otherpeople</a>
					<a href="#">#parisusa</a>
				</p>
				<nav>
					<ul id="navigation">
						<li>Essays</li>
						<li>Humor</li>
						<li>Profiles</li>
						<li>Culture</li>
						<li>Galleries</li>
						<li>About</li>
					</ul>
				</nav>
				<div id="main_search">
					<input type="text" id="main_search_bar" placeholder="Search The Morning News" />
					<img src="images/edition-magnifier.png" id="main_search_icon" />
				</div>
			</div>
			<div id="header_right">
				<div id="ad_deck">
					<a href="http://www.mackinleysmith.com/" target="_blank"><img id="ad_deck_image" src="images/mackinley_thumbnail.jpg" /></a>
					<div id="ad_deck_content">
					<p><a href="http://www.mackinleysmith.com/" target="_blank">MacKinley Smith</a>: Digital artist, web designer, programmer, entrepreneur.  Available for hire starting at $14/hr.</p>
					<a href="#" id="deck_link">Ads via The Deck</a>
					</div>
				</div>
				<p id="get_updates">Get Updates: <img src="images/twitter_bird_16.gif" class="update_icon" id="twitter_update_icon" /> | <img src="images/rss16.png" class="update_icon" width=12 /></p>
			</div>
		</header>
		<section>
			<article class="article_feature">
				<div class="article_header">
					<h3>A Modest Proposal</h3>
					<div class="cover_photo" style="background-image:url(images/cyclist.jpg); height:480px;">
						<h2>Stop Killing Cyclists!</h2>
						<span class="author">by Someone Somewhere</span>
					</div>
				</div>
				<div class="article_content">
					<p>Today is National Bike to Work Day.  Watch out for people on bikes this morning, they can be really hard to see and they don't always wear helmets.  Photo is licensed under Creative Commons, credit goes to Jonny Hunter (<a href="http://www.flickr.com/jonnyhunter/" target="_blank">Flickr</a>).</p>
				</div>
			</article>
			<article class="article_gallery">
				<div class="article_header">
					<h3>Gallery</h3>
					<div class="cover_photo" style="background-image:url(images/refracted_light.jpg); height:401px;"></div>
				</div>
				<div class="article_content">
					<h2>Lighthouses Rule.</h2>
					<span class="author">Someone Else</span>
					<p>If you don't like a lighthouse, you suck.  Photo is licensed under Creative Commons, credit goes to Alan Chan (<a href="http://www.flickr.com/alanymchan/" target="_blank">Flickr</a>).</p>
				</div>
			</article>
			<article class="article_feature2">
				<div class="article_header">
					<h3>Paris, USA</h3>
					<img src="images/rusty_truck.jpg" />
					<h2 style="color:#54BBFF;">Connected to France,</h2>
					<span class="author">by Another Person</span>
				</div>
				<div class="article_content">
					<p>Like white is connected to rice.  France is undeniably awesome, and their fries are the best in all of America.  The author of this article went there for two weeks to study American opinions of the place.  Photo is licensed under Creative Commons, credit goes to John Lloyd (<a href="http://www.flickr.com/hugo90/" target="_blank">Flickr</a>).</p>
				</div>
			</article>
			<article class="article_feature2">
				<div class="article_header">
					<h3>Other People</h3>
					<img src="images/eyes_back_of_head.jpg" />
					<h2 style="color:#12A81C;">Looking Back and Forward</h2>
					<span class="author">by a pirate with two wooden legs</span>
				</div>
				<div class="article_content">
					<p>At the same freaking time.  That's right: eyes in the back of our heads.  Photo is licensed under Creative Commons, credit goes to Matt Wakeman (<a href="http://www.flickr.com/mwiththeat/" target="_blank">Flickr</a>).</p>
				</div>
			</article>
			<nav id="pagination"><a href="#">< Previously</a></nav>
		</section>
		<aside>
			<div class="sidebar_header">
				<div class="sidebar_header_date"><span><?=date("M")?></span><hr /><span><?=date("d")?></span></div>
				<h4>Afternoon Headlines</h4>
				<hr style="width:20px;" />
			</div>
			<ul class="sidebar_headline_list">
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare purus vel lacus interdum nec ultrices ligula bibendum.</li>
				<li>Sed laoreet neque in nunc tincidunt vehicula. Cras laoreet lectus non urna mollis imperdiet in at nibh. Aenean vitae quam eu orci tincidunt porta.</li>
				<li>Nunc rhoncus nisl vel magna porta quis hendrerit diam sollicitudin. Suspendisse vitae orci ligula, eu luctus elit.</li>
				<li>Nulla eleifend euismod est, nec sagittis lorem pellentesque eget.</li>
				<li>Donec varius nunc eget mauris dignissim semper. Cras quis nulla quam, at consectetur sapien.</li>
				<li>Maecenas sodales tellus quis nisi fermentum id mollis turpis facilisis.</li>
				<li>Ut dignissim blandit justo, sit amet ultricies ipsum facilisis vitae.</li>
				<li>Maecenas porttitor dictum dui, at commodo diam sodales et.</li>
				<li>Sed gravida ante et diam volutpat a consequat quam convallis. Vestibulum vel leo ut magna bibendum pharetra.</li>
				<li>Nulla sodales nisi vel nulla mattis ut vestibulum eros fringilla.</li>
				<li>Vivamus nec sapien et massa fermentum elementum nec vel arcu.</li>
			</ul>
			<div class="sidebar_header">
				<div class="sidebar_header_date"><span><?=date("M")?></span><hr /><span><?=date("d")?></span></div>
				<h4>Morning Headlines</h4>
				<hr style="width:41px;" />
			</div>
			<ul class="sidebar_headline_list">
				<li>Sed faucibus ullamcorper lacus, ut congue dui ullamcorper ac.</li>
				<li>Donec eget lectus a turpis rutrum congue. Fusce tristique tortor id erat sodales ut facilisis nulla volutpat.</li>
				<li>Vivamus at mauris ut magna pulvinar luctus. Cras rutrum eros in odio tincidunt vel tincidunt dolor feugiat.</li>
				<li>Nunc rhoncus nisl vel magna porta quis hendrerit diam sollicitudin. Suspendisse vitae orci ligula, eu luctus elit.</li>
				<li>Nulla eleifend euismod est, nec sagittis lorem pellentesque eget.</li>
				<li>Donec varius nunc eget mauris dignissim semper. Cras quis nulla quam, at consectetur sapien.</li>
				<li>Nunc pellentesque fringilla massa, nec semper est sodales et.</li>
				<li>Maecenas sodales tellus quis nisi fermentum id mollis turpis facilisis.</li>
				<li>Maecenas porttitor dictum dui, at commodo diam sodales et.</li>
				<li>Nam scelerisque nunc ullamcorper augue fringilla eget tempus nisl adipiscing.</li>
				<li>Sed gravida ante et diam volutpat a consequat quam convallis. Vestibulum vel leo ut magna bibendum pharetra.</li>
			</ul>
			<a id="more_headlines">More Headlines ></a>
			<p id="headline_updates">Headline Updates: <img src="images/twitter_bird_16.gif" class="update_icon" id="twitter_headline_update_icon" /> | <img src="images/contact-mail.png" class="update_icon" /> | <img src="images/rss16.png" class="update_icon" width=12 /></p>
		</aside>
	</div>
	<footer>
		<p>This page is a clone of <a href="http://www.themorningnews.org" target="_blank">www.themorningnews.org</a>, and was created by MacKinley Smith for a TC349 assignment by Professor Jeff Siarto.</p>
		<p>I am in no way affiliated with The Morning News LLC.</p>
	</footer>
</body>
</html>