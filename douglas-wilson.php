<?php include("includes/language-switcher.php");  ?>

<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1>Linotype the Film.</h1>
		
		<h2>&ldquo;Linotype: The Film&rdquo; is a new documentary film about printing, journalism and the 8th Wonder of the World.</h2>
		<p>The film is a feature-length documentary centred around the Linotype type casting machine. Called the &ldquo;Eighth Wonder of the World&rdquo; by Thomas Edison, it revolutionised printing and society. The film tells the surprisingly emotional story of the people connected to the Linotype and how it impacted the world.</p>
		
		<aside class="speaker clearfix">
			<img src="img/doug-<?php echo $lang; ?>.gif" alt="Douglas Wilson" width="185" height="196" />
			<h3>Dougla<span class="swsh">s</span> Wilso<span class="swsh">n</h3>
			<p>Director Doug Wilson comes to the film from a background of graphic design and letterpress printing. He has a BFA in Graphic Design and has worked as a university typography instructor. He loves travel and long walks on the beach. This is his first film.</p>   
			<nav >
				<ul >
					<li><a class="website" href="http://onpaperwings.com/">onpaperwings.com</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/realdougwilson">@realdougwilson</a></li>
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
