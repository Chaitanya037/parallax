<!DOCTYPE html>
<html class="no-skrollr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Classic parallax page</title>
<style type="text/css">
* { padding:0; margin:0; }
html, body { height:100%; }
body { font-family:sans-serif; }
p { margin:1em 0; }

.parallax-image-wrapper { position:fixed; left:0; width:100%; overflow:hidden; }
.parallax-image-wrapper-50 { height:50%; top:-50%; }
.parallax-image-wrapper-100 { height:100%; top:-100%; }
.parallax-image { display:none; position:absolute; bottom:0; left:0; width:100%; background-repeat:no-repeat; background-position:center; background-size:cover; }
.parallax-image-50 { height:200%; top:-50%; }
.parallax-image-100 { height:100%; top:0; }
.parallax-image.skrollable-between { display:block; }
.no-skrollr .parallax-image-wrapper { display:none !important; }

#skrollr-body { height:100%; overflow:visible; position:relative; }
.skrollr-desktop body { height:100% !important; }

.gap { background:transparent center no-repeat; background-size:cover; }
.skrollr .gap { background:transparent !important; }
.gap-50 { height:50%; }
.gap-100 { height:100%; }

.header, .content { background:#fff; padding:1em; -webkit-box-sizing:border-box;
-moz-box-sizing:border-box; box-sizing:border-box; }
.content-full { height:100%; }
</style>
</head>

<body>
<!--
We position the images fixed and therefore need to place them outside of #skrollr-body.
We will then use data-anchor-target to display the correct image matching the current section (.gap element).
-->
<div
class="parallax-image-wrapper parallax-image-wrapper-100"
data-anchor-target="#dragons + .gap"
data-bottom-top="transform:translate3d(0px, 200%, 0px)"
data-top-bottom="transform:translate3d(0px, 0%, 0px)">

<div
class="parallax-image parallax-image-100"
style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg)"
data-anchor-target="#dragons + .gap"
data-bottom-top="transform: translate3d(0px, -80%, 0px);"
data-top-bottom="transform: translate3d(0px, 80%, 0px);"
></div>
<!--the +/-80% translation can be adjusted to control the speed difference of the image-->
</div>

<div
class="parallax-image-wrapper parallax-image-wrapper-100"
data-anchor-target="#bacons + .gap"
data-bottom-top="transform:translate3d(0px, 200%, 0px)"
data-top-bottom="transform:translate3d(0px, 0%, 0px)">

<div
class="parallax-image parallax-image-100"
style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg)"
data-anchor-target="#bacons + .gap"
data-bottom-top="transform: translate3d(0px, -80%, 0px);"
data-top-bottom="transform: translate3d(0px, 80%, 0px);"
></div>
</div>

<div
class="parallax-image-wrapper parallax-image-wrapper-100"
data-anchor-target="#kittens + .gap"
data-bottom-top="transform:translate3d(0px, 200%, 0px)"
data-top-bottom="transform:translate3d(0px, 0%, 0px)">

<div
class="parallax-image parallax-image-100"
style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg)"
data-anchor-target="#kittens + .gap"
data-bottom-top="transform: translate3d(0px, -80%, 0px);"
data-top-bottom="transform: translate3d(0px, 80%, 0px);"
></div>
</div>

<div
class="parallax-image-wrapper parallax-image-wrapper-100"
data-anchor-target="#done + .gap"
data-bottom-top="transform:translate3d(0px, 200%, 0px)"
data-top-bottom="transform:translate3d(0px, 0%, 0px)">

<div
class="parallax-image parallax-image-100"
style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg)"
data-anchor-target="#done + .gap"
data-bottom-top="transform: translate3d(0px, -80%, 0px);"
data-top-bottom="transform: translate3d(0px, 80%, 0px);"
></div>
</div>

	<div id="skrollr-body">
		<div class="header" id="dragons" style="background-color:#F00;">
		Skrollr demo of classic parallax sections. Degrades without JavaScript (could be disabled on mobile without breaking everything).
		</div>
		
		<div class="gap gap-100" style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg);"></div>
		
		<div class="content" id="bacons">
		<p>Landjaeger chicken ham fatback sausage hamburger, tri-tip capicola pastrami pancetta ribeye turducken. Rump shank turkey pig kevin sausage meatloaf tenderloin drumstick short ribs short loin. Prosciutto spare ribs chuck, pork strip steak pork chop swine bacon turkey shoulder andouille. Jowl landjaeger chicken corned beef. Ham hock kielbasa pancetta ground round sausage. Spare ribs porchetta pastrami filet mignon drumstick ball tip. Beef ribs prosciutto kevin, landjaeger shoulder ham hock ham brisket sirloin chuck t-bone drumstick kielbasa pork chop.</p>

		<p>Landjaeger spare ribs chicken ball tip, filet mignon frankfurter ribeye tenderloin corned beef. Strip steak boudin pork loin, chicken turkey ball tip beef ribs ground round shank ham hock. Kevin capicola beef, chuck pork chop shoulder brisket doner meatloaf shank ham hock tenderloin. Chuck ham hock short ribs ground round sausage prosciutto shoulder bacon andouille tri-tip beef biltong filet mignon chicken. Pork belly andouille shank, bacon sausage meatloaf bresaola pork chop short ribs t-bone. Ham hock salami porchetta bacon beef turkey, strip steak kielbasa pancetta brisket meatball t-bone.</p>

		<p>Chicken pancetta capicola chuck, turkey meatball jerky frankfurter kielbasa ball tip bacon ground round. Beef ribs brisket meatloaf short ribs landjaeger shankle spare ribs sausage, pancetta swine sirloin flank. Tail shank chuck pancetta, ham meatloaf short ribs sausage rump turkey kevin pork chop landjaeger. Doner boudin short ribs t-bone, jerky shankle bresaola drumstick. Strip steak shank spare ribs boudin doner short ribs. Boudin prosciutto jowl tenderloin tongue beef ribs, short ribs salami short loin strip steak ham jerky. Shank pancetta beef ribs, corned beef ham hock pork belly drumstick tail bresaola chuck.</p>
		</div>
		
		<div class="gap gap-100" style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg);"></div>
		
		<div class="content" id="kittens">Here be kittens</div>
		
		<div class="gap gap-100" style="background-image:url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg);"></div>
		
		<div class="content" id="done">Images from <a href="http://placekitten.com/attribution.html">http://placekitten.com/</a>, thanks!</div>
		
		<div class="gap gap-100" style="background-image: url(http://www.cloudlgs.com/members/testingwebsite136/index/thumbnail_1438146215.jpg);"></div>
		
		<div class="content" id="donew" style="background-color:#063;">
		<p>Landjaeger chicken ham fatback sausage hamburger, tri-tip capicola pastrami pancetta ribeye turducken. Rump shank turkey pig kevin sausage meatloaf tenderloin drumstick short ribs short loin. Prosciutto spare ribs chuck, pork strip steak pork chop swine bacon turkey shoulder andouille. Jowl landjaeger chicken corned beef. Ham hock kielbasa pancetta ground round sausage. Spare ribs porchetta pastrami filet mignon drumstick ball tip. Beef ribs prosciutto kevin, landjaeger shoulder ham hock ham brisket sirloin chuck t-bone drumstick kielbasa pork chop.</p>

		<p>Landjaeger spare ribs chicken ball tip, filet mignon frankfurter ribeye tenderloin corned beef. Strip steak boudin pork loin, chicken turkey ball tip beef ribs ground round shank ham hock. Kevin capicola beef, chuck pork chop shoulder brisket doner meatloaf shank ham hock tenderloin. Chuck ham hock short ribs ground round sausage prosciutto shoulder bacon andouille tri-tip beef biltong filet mignon chicken. Pork belly andouille shank, bacon sausage meatloaf bresaola pork chop short ribs t-bone. Ham hock salami porchetta bacon beef turkey, strip steak kielbasa pancetta brisket meatball t-bone.</p>

		<p>Chicken pancetta capicola chuck, turkey meatball jerky frankfurter kielbasa ball tip bacon ground round. Beef ribs brisket meatloaf short ribs landjaeger shankle spare ribs sausage, pancetta swine sirloin flank. Tail shank chuck pancetta, ham meatloaf short ribs sausage rump turkey kevin pork chop landjaeger. Doner boudin short ribs t-bone, jerky shankle bresaola drumstick. Strip steak shank spare ribs boudin doner short ribs. Boudin prosciutto jowl tenderloin tongue beef ribs, short ribs salami short loin strip steak ham jerky. Shank pancetta beef ribs, corned beef ham hock pork belly drumstick tail bresaola chuck.</p>
		</div>
	</div>

<script type="text/javascript" src="http://www.cloudlgs.com/dist/skrollr.min.js"></script>
<script type="text/javascript">
skrollr.init({
	smoothScrolling: false,
	mobileDeceleration: 0.004
});
</script>
</body>
</html>
