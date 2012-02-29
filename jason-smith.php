<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Jason Smith";
include("includes/head.php"); 
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?> jason">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<hgroup>
			<h1 class="no-rule" >Designing for screens.</h1>
		</hgroup>
		
		
		<aside class="speaker clearfix">
			<img src="img/jason-<?php echo $lang; ?>.gif" alt="Jason Smith" width="185" height="196" />
			<h3><span class="char1">J</span>aso<span class="swsh">n</span> Smit<span class="swsh">h</span></h3>
			<p>Jason Smith is the founder of Fontsmith, with a background in hand lettering and calligraphy. His work has a distinct quality that combines warmth and modernity with an intense eye for finely crafted letter-forms. </p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.fontsmith.com">fontsmith.com</a></li>
					<li><a class="twitter" href="http://twitter.com/fsjason">@fsjason</a></li>
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
