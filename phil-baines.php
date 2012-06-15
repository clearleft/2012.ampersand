<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Phil Baines";
include("includes/head.php");
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">

		<hgroup>
			<h1 id="sessionTitle" class="no-rule">Keynote.</h1>
		</hgroup>

		<aside class="speaker clearfix">
			<img src="img/phil-<?php echo $lang; ?>.gif" alt="Phil Baines" width="185" height="196" />
			<h3 class="phil-baines" href="/phil-baines">Phi<span class="swsh">l</span> Baine<span class="swsh">s</span></h3>
			<p>Phil Baines is Professor at Central Saint Martins where he leads Typography as part of the Graphic Design degree course. Phil is a renowned speaker and author of books including Penguin by Design and Type &amp; Typography (with Andrew Haslam).</p>
			<p>Phil will also be guiding the Brighton public lettering walk on Saturday, starting at 10am from the Corn Exchange.</p>

			<nav >
				<ul >
					<li><a class="website" href="http://publiclettering.org.uk">Public Lettering</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/sarkytype">@sarkytype</a></li>
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
