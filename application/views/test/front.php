<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Front - Uprising Guild of Doomhammer</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo(base_url()); ?>assets/js/jquery.cycle.all.js"></script>

<link href="<?php echo(base_url()); ?>assets/css/core.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="outer-container">
    <div class="inner-container">

	<div class="centercolumn">
	    <div class="navigation" id="frontnav">
		<ul class="tabs">
		    <li><a href="#"><img src="<?php echo(base_url()); ?>assets/img/homebutton.png"></a></li>
		    <li ><a href="#">Forums</a></li>
		    <li ><a href="#">Philosophy</a></li>
		    <li ><a href="#">Recruitment</a></li>
		    <li ><a href="#">Roster</a></li>
		    <li  class='passiveselected'><a href="#">Loot Tracker</a></li>
		    <li><a href="#">Member Utilities</a></li>
		</ul>
	    </div>
	    
	    <div class="spacer" id="frontbodynavspacer">
	    </div>
     
	    <div class="bodymodule" id="frontbody">
		<div class="rotator">
		    <img src="<?php echo(base_url()); ?>assets/img/banner/leader.png">
		    <a href="#"><img src="<?php echo(base_url()); ?>assets/img/banner/recruiting.png"></a>
		    <a href="#"><img src="<?php echo(base_url()); ?>assets/img/banner/philosophies.png"></a>
		    <a href="#"><img src="<?php echo(base_url()); ?>assets/img/banner/forums.png"></a>
		</div>
	    </div>

	    <div class="highlights">
		<div class="highlight_box" id="hlb1">
		    <p class="hlb_title">Recruitment</p>
		    <p class="hlb_body">Our application process is different. Learn more.<p>
				    <img src="<?php echo(base_url()); ?>assets/img/hlb/recruitment.png" width="88" height="88" class="hlb_img">
		</div>
		
		<div class="highlight_box" id="hlb2">
		    <p class="hlb_title">Progress</p>
		    <p class="hlb_body">Our ranking on wowprogress.com<p>
		    <img src="<?php echo(base_url()); ?>assets/img/hlb/guildbanner.png" width="83" height="94" class="hlb_img">

		</div>
	    
		<div class="highlight_box" id="hlb3">
		    <p class="hlb_title">Roster</p>
		    <p class="hlb_body">Meet our team, find someone to talk to about us.<p>
		    <img src="<?php echo(base_url()); ?>assets/img/hlb/portrait.png" width="88" height="88" class="hlb_img">
		</div>
	    
	    </div>
	    
	    <div class="news">
		<div class="newsarticle">
		    <span class="news_headline">Headline Article</span>
		    <span class="news_postedby">Posted By X on Y</span>
		    <hr class="news_hr" align="left">
		    <div class="news_body">
			<p>Bacon ipsum dolor sit amet turducken shoulder shank short loin spare ribs chicken, ham capicola strip steak. Fatback tri-tip ground round rump ham sirloin brisket jerky. Bresaola brisket hamburger pancetta strip steak shankle shoulder tenderloin ham tail short loin sirloin tri-tip flank. Ribeye strip steak biltong, swine frankfurter tongue beef ribs jowl pork. Strip steak drumstick pancetta andouille. Chuck shankle tongue filet mignon brisket drumstick frankfurter tail jowl leberkas pork chop. Leberkas beef ribs pork belly chicken venison, pork loin biltong shankle shoulder meatloaf short loin ball tip turkey tri-tip tail.
			</p>
			<p>Pastrami pork loin pork prosciutto. Shank tenderloin sausage venison, pork loin chicken spare ribs short loin leberkas fatback meatloaf shoulder pig. Capicola meatball salami pork belly tenderloin. Ground round rump drumstick, andouille short ribs meatball strip steak tail bacon t-bone brisket salami.
			</p>
			<p>Andouille corned beef shoulder pork. Brisket t-bone bacon chicken turkey tenderloin capicola jerky ham hock ribeye. Beef ribs pork loin pork chop, sirloin tail capicola andouille bresaola shankle. Pork chop beef meatball jowl tenderloin hamburger shoulder leberkas tail corned beef salami tri-tip ball tip.
			</p>
		    </div>
		</div>
	    </div>
	</div>
	
	<script type="text/javascript">
	    $(document).ready(function() {
		$('.rotator')
		.before('<div id="nav">')
		.cycle({
			    fx: 'fade',
			    delay: -2000,
			
		});
		
		$('.highlight_box').click(function(){
		    alert($(this).attr("id"));
		    
		});
	    });
	</script>
	
	
	<div class="bottom">
		Uprising Guild of Doomhammer<br>
	    <div class="nicelinks">
		<a href="#">Footer Link</a>
	    </div>
	</div>
	
    </div>
</div>
</body>
</html>