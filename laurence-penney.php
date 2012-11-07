<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Laurence Penney";
include("includes/head.php"); 
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<hgroup>
			<h1 id="sessionTitle" >If it don&#8217;t stick, make it stick</h1>
			<h2>Some CSS font stack hackery</h2>
		</hgroup>
		<p>The CSS font stack has been around for a long time. It takes care of font fallback, so if Verdana doesn&#8217;t have Arabic, Arial gets used. But with webfonts, the rules of the game have changed, and the CSS font stack can be used to do some real fun wizardry.</p>
		
		<aside class="speaker clearfix">
			<img src="img/laurence-<?php echo $lang; ?>.gif" alt="Laurence Penney" width="185" height="196" />
			<h3>Laurenc<span class="swsh">e</span> Penne<span class="swsh">y</span></h3>
			<p>Laurence is an independent consultant working mainly for <a href="http://www.myfonts.com/">MyFonts</a>, which he helped set up in 1999-2000. These days he mediates with foundries while his tools are crunching out webfonts. His font geekery started as an undergrad, where he learned lots about fonts by attempting a parametric typeface design system. Later, amazed by the TrueType language, he decided to write an interpreter to get to know it better. He’s been delighted to impart some hinting nerdiness to Reading’s Type Design MA folk. Outside type, there are insatiable desires for maps and books to worry about.</p>
			<nav >
				<ul >
					<!-- <li><a class="website" href="#">website.com</a></li> -->
					<!-- <li><a class="twitter" href="#">@twittername</a></li> -->
				</ul>
			</nav>   
			<p class="audio">
            <a href="http://ampersand.s3.amazonaws.com/2012/audio/06-laurence-penney.mp3">Audio (15.3&nbsp;<abbr class="smcp">Mb</abbr>)</a>
             ·
            Slides to come
            </p>                             
			
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

