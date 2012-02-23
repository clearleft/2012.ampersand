<?php include("includes/language-switcher.php");  ?>

<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1 class="no-rule">The State of Web Typography.</h1>
		
				
		<aside class="speaker clearfix">
			<img src="img/erik-<?php echo $lang; ?>.gif" alt="Erik Spiekerman" width="185" height="196" />
			<h3 class="eric-spiekerman" href="/eric-spiekerman">Eri<span class="swsh">k</span> Spiekerman<span class="swsh">n</span></h3>
			<p>Erik Spiekermann is information architect, type designer and author of books and articles on type and typography. Two of his typefaces, FF Meta and ITC Officina, are considered to be modern classics.  In 1979 he founded MetaDesign and in 1989 FontShop. Today he is managing partner and creative director of Edenspiekermann.</p> 

			<p>Erik is Honorary Professor at the University of the Arts in Bremen and has been getting a lot of awards lately, eg  the 2011 German Design Award for Lifetime 
			Achievement as well as the TDC Medal in New York. FWIW, he is also Honorary Royal Designer for Industry in Britain. </p>   
			<nav >
				<ul >
					<li><a class="website" href="http://spiekermann.com">spiekermann.com</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/espiekermann">@espiekermann</a></li>
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
