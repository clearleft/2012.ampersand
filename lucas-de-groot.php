<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Lucas de Groot";
include("includes/head.php"); 
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1 class="no-rule">On Hinting.</h1>
		
		<aside class="speaker clearfix">
			<img src="img/lucas-<?php echo $lang; ?>.gif" alt="Luc(as) de Groot" width="185" height="196" />
			<h3 class="lucas-de-groot" >Luc(as<span class="swsh">)</span> de Groo<span class="swsh">t</span></h3>
			<p>Berlin-based Dutch type designer Luc(as) de Groot has worked with and for many well-known companies and publications. He has made custom fonts for prestigious newspapers such as Folha de S.Paulo, Le Monde, Metro and Der Spiegel in addition to creating corporate type for international companies including Sun Microsystems, Bell South, Heineken, Siemens and Miele. He designed two font families for Microsoft: the ‘monospaced’ font family Consolas, the new alternative to Courier; and Calibri, the new default typeface in Microsoft Word.
</p> 

			
			<nav >
				<ul >
					<li><a class="website" href="http://www.lucasfonts.com">lucasfonts.com</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/FontFabrik">@FontFabrik</a></li>
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
