<?php include("includes/language-switcher.php");  ?>
<?php
$title = "Jake Archibald";
include("includes/head.php"); 
?>

<body id="wrapper" class="vevent session <?php echo $lang; ?> jake">

<?php include("includes/header.php"); ?>

	<!-- SESSION -->
	<article class="section session clearfix">
		
		<hgroup>
			<h1 id="sessionTitle" class="no-rule">In your @font-face.</h1>
		</hgroup>
		
		<h2>We finally have the ability to serve custom fonts to all popular browsers. However, as with everything browser-based, to succeed with web fonts we must navigate a minefield of gotchas and peculiarities between browsers, devices, and operating systems.</h2>

<p>Although fonts are a design asset, this talk will be deeply technical. We’ll look at what goes into a font file and how you can optimize font files for rendering and download performance, investigate common performance pitfalls made by most font delivery networks, and explore legal problems connected with font usage.</p>
		
			
		<aside class="speaker clearfix">
			<img src="img/jake-<?php echo $lang; ?>.gif" alt="Jake Archibald" width="185" height="196" />
			<h3>Jak<span class="swsh">e</span> Archibal<span class="swsh">d</span></h3>
			<p>Jake Archibald is a developer at <a href="http://lanyrd.com" >Lanyrd</a> specialising in client-side stuff, although dabbles in a bit of Django. He built their <a href="http://lanyrd.com/mobile/">mobile web app</a> which went for ambitious device support rather than "Webkit only thank-you-please". He's keen on web performance, developing <a href="http://www.spritecow.com">Sprite Cow</a> to help ease the pain of sprite sheets, and started a <a href="http://jaffathecake.posterous.com">blog</a> way after blogs stopped being cool.

Outside of the web, he likes the taste of beer, watches Formula One, and likes <a href="http://www.flickr.com/photos/jaffathecake/">taking photos of things</a>. He has ambitions to be a <a href="http://www.flickr.com/photos/szene/6227429168/">fashion designer</a>.</p>   
			<nav >
				<ul >
					<li><a class="website" href="http://www.jakearchibald.com">jakearchibald.com</a></li>
					<li><a class="twitter" href="http://twitter.com/#!/jaffathecake">@jaffathecake</a></li>
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
