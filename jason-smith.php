<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent session">

	<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1>Designing for screens.</h1>
		
		<h2>Vestibulum id nisl non eros placerat elementum. Vestibulum porta lectus id felis tempus non consequat erat auctor. Curabitur hendrerit, est vitae auctor consequat, lorem lorem lacinia nibh, ut feugiat turpis mauris in risus.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare venenatis felis vitae pellentesque. Cras volutpat luctus lorem. Etiam porttitor erat suscipit est dapibus et congue lectus dapibus. Fusce vel metus augue, eget rhoncus metus. Mauris accumsan erat sit amet tellus scelerisque sed gravida ipsum facilisis. Nam ornare auctor odio eget dictum. Etiam ipsum nibh, suscipit vel adipiscing vitae, posuere a arcu.</p>
		
		<aside class="speaker clearfix">
			<img src="img/jason.gif" alt="Jason Smith" width="185" height="196" />
			<h3><span class="char1">J</span>aso<span class="swsh">n</span> Smit<span class="swsh">h</span></h3>
			<p>Jason Smith is the founder of Fontsmith, with a background in hand lettering and calligraphy. His work has a distinct quality that combines warmth and modernity with an intense eye for finely crafted letter-forms. </p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.fontsmith.com">fontsmith.com</a></li>
					<li><a class="twitter" href="http://twitter.com/fsjason">@fsjason</a></li>
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
