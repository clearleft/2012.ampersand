<?php include("includes/language-switcher.php");  ?>

<?php include("includes/head-".$lang.".php"); ?>

<body id="wrapper" class="vevent home <?php echo $lang; ?>">

<?php include("includes/header-".$lang.".php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1>Detail in Web Typography.</h1>
		
		<h2>Vestibulum id nisl non eros placerat elementum. Vestibulum porta lectus id felis tempus non consequat erat auctor. Curabitur hendrerit, est vitae auctor consequat, lorem lorem lacinia nibh, ut feugiat turpis mauris in risus.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare venenatis felis vitae pellentesque. Cras volutpat luctus lorem. Etiam porttitor erat suscipit est dapibus et congue lectus dapibus. Fusce vel metus augue, eget rhoncus metus. Mauris accumsan erat sit amet tellus scelerisque sed gravida ipsum facilisis. Nam ornare auctor odio eget dictum. Etiam ipsum nibh, suscipit vel adipiscing vitae, posuere a arcu.</p>
		
		<aside class="speaker clearfix">
			<img src="img/yves.gif" alt="Yves Peters" width="185" height="196" />
			<h3 class="yves-peters" href="/yves-peters"><span class="char1">Y</span>ve<span class="swsh">s</span> <span class="char5">P</span>eters</h3>
			<p>In August 2008 Yves put his graphic design career on the back burner, freeing him to concentrate on his writing and related activities in the digital type business. He writes his Bald Condensed type reviews on <a href="http://typographer.org/">Typographer.org</a> and edits <a href="http://www.fontshop.nl/">Unzipped</a>, the blog on the FontShop BeNeLux home page. Yves also is an accomplished drummer with British/Belgian pop/rock band Troubleman and Americana outfit <a href="http://www.facebook.com/home.php#!/album.php?aid=180255&id=538141732">Rosa Luxe*</a>. His talent for being able to identify most typefaces on sight is utterly useless in daily life.</p>   
			<nav >
				<ul >
					<li><a class="website" href="http://fontfeed.com/">Fontfeed.com</a></li>
					<li><a class="twitter" href="http://twitter.com/baldcondensed">@baldcondensed</a></li>
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
