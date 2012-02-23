<?php include("includes/language-switcher.php");  ?>

<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent session <?php echo $lang; ?> jose">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1 class="no-rule">Typographic Matchmaking.</h1>
		
		<aside class="speaker clearfix">
			<img src="img/jose-<?php echo $lang; ?>.gif" alt="José Scaglione" width="185" height="196" />
			<h3><span class="char1">J</span>os<span class="swsh">é</span> Scaglion<span class="swsh">e</span></h3>
			<p>Jos&eacute; Scaglione is a graphic and a typeface designer and he is a partner of the independent type foundry TypeTogether. He teaches typography at the National University of Rosario and at the University of Buenos Aires, Argentina, and he is frequently invited to lecture about typography and to lead workshops of typeface design at international conferences and academic institutions. He is a member of the Board of the Association Typographique Internationale since 2007 and he was the chairman of the Letter.2 type design competition and conference. </p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.type-together.com">type-together.com</a></li>
					<li><a class="twitter" href="http://twitter.com/josescaglione">@josescaglione</a></li>
				</ul>
			</nav>                                
		</aside>
		
		<aside class="speaker clearfix no-rule">
			<img src="img/veronika-<?php echo $lang; ?>.gif" alt="Veronika Burian" width="185" height="196" />
			<h3><span class="char1">V</span>eronik<span class="swsh">a</span> Buria<span class="swsh">n</span></h3>
			<p>Veronika Burian, born in Prague, got her first degree in Industrial Design in Munich, Germany, before she moved on to Austria and Italy to work as a mix between a product and graphic designer. Discovering her true passion for type, she graduated with distinction from the MA in Typeface Design in Reading, UK, in 2003 and started to work as full-time type designer at DaltonMaag in South London until 2007.</p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.type-together.com">type-together.com</a></li>
					<li><a class="twitter" href="http://twitter.com/typetogether">@typetogether</a></li>
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
