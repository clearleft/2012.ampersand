	<!-- SPONSORS -->
	<section class="sponsors">
		<div class="section clearfix">
			<h2 id="sponsorsTitle"><span class="char1">O</span>ur Gener<span class="char1">o</span>us Sponsors</h2>
			<div class="premiere">
				<h5><span>Premiere Sponsors</span></h5>
				<a href="http://fontdeck.com"><img class="fontdeck" alt="Fontdeck" src="img/sponsors/fontdeck.png" /></a>
			</div>
			<div class="grass-roots">
				<h5><span>Grass Roots Sponsors</span></h5>
				<a href="http://8faces.com/"><img class="8faces" alt="8 Faces" src="img/sponsors/8faces.png" /></a>
			</div>
			<div class="executive">
				<h5><span>Executive Sponsors</span></h5>
				<a href="http://typekit.com"><img class="typekit" alt="Typekit" src="img/sponsors/typekit.png" /></a>
				<a href="http://www.webtype.com/"><img class="webtype" alt="Webtype" src="img/sponsors/webtype.png"  /></a>
				<a href="http://www.heartinternet.co.uk/"><img class="heart-internet" alt="Heart Internet" src="img/sponsors/heartinternet.png" /></a>
				<a href="http://lanyrd.com/2012/ampersand/"><img class="lanyrd" alt="Lanyrd" src="img/sponsors/lanyrd.png" /></a>
			</div>
			<div class="media-partners">
				<h5><span>Media Partners</span></h5>
				<a href="http://www.eyemagazine.com/"><img class="eye" alt="Eye Magazine" src="img/sponsors/eye.png" /></a>
			</div>
		</div>
	</section>
	
	<!-- FOOTER NAV -->
	<div class="section">
		<nav class="footer-nav clearfix" >
			<ul>
				<li ><a class="privacy" href="/privacy" title="Privacy Policy">Privacy</a></li>
				<li><a class="terms" href="/terms" title="Terms and Conditions">Terms &amp; Conditions</a></li>
				<li><a class="accessibilty" href="/accessibility" title="accessibility">Accessibility</a></li>
			</ul>
		</nav>
	</div>

	<!-- CLEARLEFT FOOTER -->
	<footer >
		<div class="section">
			<a href="http://clearleft.com"><img class="clearleft" alt="Clearleft Logo" src="img/clearleft.png" /></a>
			<p>Presented by <a href="http://clearleft.com" title="Clearleft" >Clearleft</a>, a user experience design consultancy based in Brighton, UK.
			Email us on <a href="mailto:ampersand@clearleft.com" title="ampersand@clearleft.com">ampersand@clearleft.com</a>
			</p>
			<small>Ampersand &copy; 2011 Clearleft Ltd. All rights reserved. 
			<?php if($lang=='sw') { ?>
				Set in <a href="http://fontdeck.com/typeface/clobbergrotesk">Clobber Grotesk</a> 
			<?php }else { ?>
				Set in flavours of <a href="http://fontdeck.com/typefaces/all/tags/superfamily:trilogy">Trilogy</a> 
			<?php } ?>
			
			
			
			served by <a href="http://fontdeck.com/">Fontdeck.</a></small>
			
			<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="skinselection">
				<label for="skin">Language: </label>
				<select name="lang" id="language" onchange="javascript:this.form.submit();">
					<option value="en" <?php if($lang=='en'){echo 'selected';} ?> >English</option>
					<option value="sw" <?php if($lang=='sw'){echo 'selected';} ?> >Swiss</option>
				</select>
				<input id="languageSubmit" type="submit" value="Go!" />
			</form>
			
		</div>
	</footer>

	<script src="js/script-<?php echo $lang ?>.js"></script>
	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-132181-13']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	
