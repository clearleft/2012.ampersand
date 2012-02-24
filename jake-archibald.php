<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Jake Archibald";
include("includes/head.php"); 
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?> jake">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1 class="no-rule">Web Font Performance.</h1>
		
			
		<aside class="speaker clearfix">
			<img src="img/jake-<?php echo $lang; ?>.gif" alt="Jake Archibald" width="185" height="196" />
			<h3>Jak<span class="swsh">e</span> Archibal<span class="swsh">d</span></h3>
			<p>Jake Archibald is a Web Developer at Lanyrd, the social conference directory. Jake has extensive experience building JavaScript components to meet strict performance and accessibility requirements of sites such as the <a href="bbc.co.uk">bbc.co.uk</a>. He also helped develop the BBC's technical Standards & Guidelines on markup, accessibility and JavaScript. Outside of the web, Jake is a keen photographer and motorsport fan.</p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.jakearchibald.com">jakearchibald.com</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/jaffathecake">@jaffathecake</a></li>
				</ul>
			</nav>                                
			
		</aside>
		<section class="all-speakers clearfix">
			<h4><span>ALL SPEAKERS</span></h4>
			<nav>
				<ul >
					<?php include("includes/speakers-list.php"); ?>
				</ul>
			</nav>
		</section>
		
	</article>
	
		
	<?php include("includes/footer.php"); ?>

</body>
</html>
