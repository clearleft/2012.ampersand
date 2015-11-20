<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Elliot Jay Stocks";
include("includes/head.php"); 
?>

<body id="wrapper" class="vevent home <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<hgroup>
			<h1 id="sessionTitle" class="no-rule">Enhancing the Future.</h1>
		</hgroup>
		
		  
			<p class="audio">
            <a href="http://ampersand.s3.amazonaws.com/2012/audio/09-elliot-jay-stocks.mp3">Audio (28.9&nbsp;<abbr class="smcp">Mb</abbr>)</a>
             ·
            <a href="http://ampersand.s3.amazonaws.com/2012/slides/elliotjaystocks_ampersand.pdf">Slides (16.3&nbsp;<abbr class="smcp">Mb PDF</abbr>)</a>
            </p>  
		<aside class="speaker clearfix">
			<img src="img/elliot-<?php echo $lang; ?>.gif" alt="Elliot Jay Stocks" width="185" height="196" />
			<h3>Ellio<span class="swsh">t</span> Ja<span class="swsh">y</span> Stock<span class="swsh">s</span></h3>
			<p>Elliot is a designer, speaker, and author whose work can often be found in books, blogs, and magazines, with a portfolio containing clients like Virgin, Microsoft, Brooklyn Beta, Founders Fund, and MailChimp. He gives talks at events including An Event Apart, TYPO Berlin, South by Southwest, and Web Directions, and writes for publications such as Codex: The Journal of Typography, .Net, and Computer Arts. In 2012 Elliot has given up client work to focus on his role as Editor and Creative Director of 8 Faces, and to create a number of digital and analogue products as one half of Viewport Industries. <small style="display:block; font-size:0.8em">(Photo credit: Marc Thiele)</small></p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.elliotjaystocks.com">elliotjaystocks.com</a></li>
					<li><a class="twitter" href="http://twitter.com/elliotjaystocks">@elliotjaystocks</a></li>
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
