<?php include("includes/language-switcher.php");  ?>

<?php include("includes/head-".$lang.".php"); ?>

<body id="wrapper" class="vevent home <?php echo $lang; ?>">

<?php include("includes/header-".$lang.".php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1>Enhancing the Future.</h1>
		
		<h2>Vestibulum id nisl non eros placerat elementum. Vestibulum porta lectus id felis tempus non consequat erat auctor. Curabitur hendrerit, est vitae auctor consequat, lorem lorem lacinia nibh, ut feugiat turpis mauris in risus.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare venenatis felis vitae pellentesque. Cras volutpat luctus lorem. Etiam porttitor erat suscipit est dapibus et congue lectus dapibus. Fusce vel metus augue, eget rhoncus metus. Mauris accumsan erat sit amet tellus scelerisque sed gravida ipsum facilisis. Nam ornare auctor odio eget dictum. Etiam ipsum nibh, suscipit vel adipiscing vitae, posuere a arcu.</p>
		
		<aside class="speaker clearfix">
			<img src="img/elliot.gif" alt="Elliot Jay Stocks" width="185" height="196" />
			<h3>Ellio<span class="swsh">t</span> Ja<span class="swsh">y</span> Stock<span class="swsh">s</span></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare venenatis felis vitae pellentesque. Cras volutpat luctus lorem. Etiam porttitor erat suscipit est dapibus et congue lectus dapibus. Fusce vel metus augue, eget rhoncus metus. Mauris accumsan erat sit amet tellus scelerisque sed gravida ipsum facilisis. Nam ornare auctor odio eget dictum. Etiam ipsum nibh, suscipit vel adipiscing vitae, posuere a arcu.</p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.elliotjaystocks.com">elliotjaystocks.com</a></li>
					<li><a class="twitter" href="http://twitter.com/elliotjaystocks">@elliotjaystocks</a></li>
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
