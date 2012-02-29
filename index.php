<?php include("includes/language-switcher.php");  ?>
<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent home <?php echo $lang; ?>">

<?php include("includes/header.php"); ?>

	<!-- SPEAKERS -->
	<section class="section speakers">
		<h1 id="speakersTitle">Combining the <span class="char13">w</span>orlds of <strong>Web <span class="amp">&amp;</span> Type Desig<span class="full-stop-kern">n</span><span class="full-stop-kern">.</span></strong></h1>
		<ul id="speakersList" class="speakers">
			<?php include("includes/speakers-list.php"); ?>
		</ul>
	</section>
	
	<!-- SOCIAL -->
	<section class="section social">
		<p>Follow Ampersand on Twitter <a href="http://twitter.com/ampersandconf">@ampersandconf</a> <a href="https://twitter.com/#!/search/realtime/ampconf">#ampconf</a> 
		&amp; track who&#8217;s attending on the social conference directory <a href="http://lanyrd.com/2012/ampersand/">Lanyrd.</a></p>
	</section>
		
<?php include("includes/footer.php"); ?>

</body>
</html>