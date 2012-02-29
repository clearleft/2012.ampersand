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
			<h1 id="sessionTitle" class="no-rule" >Designing for screens.</h1>
		</hgroup>
		
		
		<aside class="speaker clearfix">
			<img src="img/jason-<?php echo $lang; ?>.gif" alt="Jason Smith" width="185" height="196" />
			<h3><span class="char1">J</span>aso<span class="swsh">n</span> Smit<span class="swsh">h</span></h3>
			<p>Jason Smith is the founder and creative director of Fontsmith. Jason studied Calligraphy, Lettering and Signwriting at Art College before going on to becoming a lettering artist. Jason quickly established a reputation in Typeface Design and collaborated with a host of other font designers and graphic designers.
Set up Fontsmith in London in 1999 and became involved with corporate identities and branding with typeface design. In 2001 Fontsmith released it's own font library. Fontsmith has never looked back and now employs six staff with 26 typefaces, as well as a long list of corporate clients including Channel 4, BBC, and UEFA.</p>   
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
