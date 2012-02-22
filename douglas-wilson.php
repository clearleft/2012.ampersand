<?php include("includes/language-switcher.php");  ?>

<?php include("includes/head-".$lang.".php"); ?>

<body id="wrapper" class="vevent home <?php echo $lang; ?>">

<?php include("includes/header-".$lang.".php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<h1>Linotype the Film.</h1>
		
		<h2>Vestibulum id nisl non eros placerat elementum. Vestibulum porta lectus id felis tempus non consequat erat auctor. Curabitur hendrerit, est vitae auctor consequat, lorem lorem lacinia nibh, ut feugiat turpis mauris in risus.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare venenatis felis vitae pellentesque. Cras volutpat luctus lorem. Etiam porttitor erat suscipit est dapibus et congue lectus dapibus. Fusce vel metus augue, eget rhoncus metus. Mauris accumsan erat sit amet tellus scelerisque sed gravida ipsum facilisis. Nam ornare auctor odio eget dictum. Etiam ipsum nibh, suscipit vel adipiscing vitae, posuere a arcu.</p>
		
		<aside class="speaker clearfix">
			<img src="img/doug.gif" alt="Douglas Wilson" width="185" height="196" />
			<h3>Dougla<span class="swsh">s</span> Wilso<span class="swsh">n</h3>
			<p>Doug Wilson is a designer, filmmaker, art director and teacher that has a passion for letterpress. With a love of hand-painted signs and a Polaroid camera, he has documented vernacular typography all across the United States. He is proprietor of The Scarlet Letter Press - printing posters on his Vandercook SP-20 Proof Press. He has taught typography as an adjunct professor and worked at an advertising agency. Doug is now directing a feature-length documentary, Linotype: The Film.</p>   
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
