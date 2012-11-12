<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Detail in Web Typography.";
include("includes/head.php"); 
?>
<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1 id="sessionTitle" >Detail in Web Typography.</h1>
		<h2>For too long web designers had to make do with makeshift solutions for certain typesetting challenges.</h2>
		<p>Thanks to recent developments in web typography we now have an increased control over the appearance of text on the internet. However this also means we have to get (re)acquainted with the rules in typography. This talk gives an overview of the do's and don't's and offers practical solutions to common problems.</p>                                
			<p class="audio">
            <a href="http://ampersand.s3.amazonaws.com/2012/audio/02-yves-peters.mp3">Audio (43.1&nbsp;<abbr class="smcp">Mb</abbr>)</a>
             ·
            Slides to come
            </p>
		
		<aside class="speaker clearfix">
			<img src="img/yves-<?php echo $lang; ?>.gif" alt="Yves Peters" width="185" height="196" />
			<h3 class="yves-peters" href="/yves-peters"><span class="char1">Y</span>ve<span class="swsh">s</span> <span class="char5">P</span>eters</h3>
			<p>A little over six years ago graphic designer Yves Peters started reviewing type in his Bald Condensed column on <a href="http://typographer.org">Typographer.org</a>. In August 2008 he put his graphic design career on the back burner, freeing him to concentrate on his writing and related activities in the digital type business. Yves currently edits The FontFeed, a daily dispatch of recommended fonts, typography techniques, and inspirational examples of digital type at work in the real world; and Unzipped, his blog on the FontShop BeNeLux home page. He regularly speaks at schools and international conferences. Yves also is an accomplished drummer with British/American/Belgian pop/rock bands Troubleman and Rosa Luxe*. His talent for being able to identify most typefaces on sight is utterly useless in daily life.</p>
			<nav >
				<ul >
					<li><a class="website" href="http://fontfeed.com/">Fontfeed.com</a></li>
					<li><a class="twitter" href="http://twitter.com/baldcondensed">@baldcondensed</a></li>
				</ul>
			</nav>
		</aside>
		
		<nav class="all-speakers clearfix">
			<h4><span>ALL SPEAKERS</span></h4>
				<ul >
					<?php include("includes/speakers-list.php"); ?>
				</ul>
		</nav>
		
	</article>
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
