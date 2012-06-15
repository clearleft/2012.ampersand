<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Erik Spiekermann";
include("includes/head.php");
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">

		<hgroup>
			<h1 id="sessionTitle" class="no-rule">The State of Web Typography.</h1>
		</hgroup>

		<aside class="speaker clearfix">
			<img src="img/erik-<?php echo $lang; ?>.gif" alt="Erik Spiekerman" width="185" height="196" />
			<h3 class="eric-spiekerman" href="/eric-spiekerman">Eri<span class="swsh">k</span> Spiekerman<span class="swsh">n</span></h3>
			<p>Erik Spiekermann is no longer speaking at Ampersand 2012.</p>
			<nav >
				<ul >
					<li><a class="website" href="http://spiekermann.com">spiekermann.com</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/espiekermann">@espiekermann</a></li>
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
