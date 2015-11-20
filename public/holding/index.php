<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Ampersand 2012 &middot; The Web Typography Conference</title>
<script>
function supports(property) {
    var div = document.createElement('div'),
        vendors = ['Webkit', 'Moz', 'O', 'ms', 'Khtml'],
        propertyName = property.toLowerCase();
        len = vendors.length;
    if (property in div.style) return true;
    var property = property.replace(/^[a-z]/, function(val) {
        return val.toUpperCase();
    });
    while(len--) {  
       if ( vendors[len] + property in div.style ) return true;
    }
    return false;
}
document.documentElement.className += supports('fontFeatureSettings')? ' font-feature-settings' : '';
if(
	(navigator.userAgent.match(/iPhone/i)) || 
	(navigator.userAgent.match(/iPod/i)) ||
	(navigator.userAgent.match(/iPad/i))
) {
    document.documentElement.className += ' iOS';
}
</script>
<meta name="description" content="Ampersand is an affordable one-day event for knowledgable web designers and typography enthusiasts, held in Brighton on 15 June 2012." />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="stylesheet" href="css/styles.css">
</head>

<body id="wrapper">
<div class="vevent">

<p class="presents"><a href="http://clearleft.com">Clearleft</a> presents</p>

<h1 class="summary">Ampersand</h1>
<h2>The Web Typography
<strong>Conference</strong></h2>

<h3>Combining the worlds of Web &amp; Type Design</h3>
<ul>
<li>Eri<span class="swsh">k</span> Spiekerman<span class="swsh">n</span></li>
<li>Jak<span class="swsh">e</span> Archibal<span class="swsh">d</span></li>
<li>Dougla<span class="swsh">s</span> Wilso<span class="swsh">n</span></li>
<li>Yve<span class="swsh">s</span> Peters</li>
<li>Jaso<span class="swsh">n</span> Smit<span class="swsh">h</span></li>
<li>Jos<span class="swsh">é</span> Scaglion<span class="swsh">e</span></li>
<li>Ellio<span class="swsh">t</span> Ja<span class="swsh">y</span> Stock<span class="swsh">s</span></li>
<li>Veronik<span class="swsh">a</span> Buria<span class="swsh">n</span></li>
</ul>

<div class="whenwhere">
<p class="dtstart" title="2012-06-15"><time datetime="2012-06-15">Friday 15<span class="sup">th</span> June 2012</time></p>
<p class="location">Brighton, UK</p>
</div>

<div class="contact">
<p class="follow">Tickets go on sale 6th March 2012, priced &pound;125.</p>
<p class="follow">Follow <a href="http://twitter.com/ampersandconf">@ampersandconf</a> for updates &amp; join us on <a href="http://lanyrd.com/2012/ampersand" class="email">Lanyrd</a>.</p>
<p>Download our <a href="http://ampersand.s3.amazonaws.com/2012/Ampersand_Sponsor_Pack_2012.pdf" class="email">information pack</a> for sponsorship opportunities.</p>
</div>

<div class="sponsors">
<ul>
	<li class="premier knockback"><a href="http://fontdeck.com/?ampersand"><img src="i/sponsors/fontdeck.png" style="width:10.75em; height:7.25em" alt="Fontdeck"></a></li>
	<li><a href="http://heartinternet.co.uk/?ampersand"><img src="i/sponsors/heartinternet.png" style="width:12.0625em; height:1.875em" alt="Heart Internet"></a></li>
	<li><a href="http://typekit.com/?ampersand"><img src="i/sponsors/typekit.png" style="width:9.5625em; height:2.5em" alt="Typekit"></a></li>
	<li class="knockback"><a href="http://webtype.com/?ampersand"><img src="i/sponsors/webtype.png" style="width:11.8125em; height:2em" alt="Webtype"></a></li>
</ul>

</div>

<div class="footer">
<p>Set in flavours of <a href="http://fontdeck.com/typefaces/all/tags/superfamily:trilogy">Trilogy</a>, served by <a href="http://fontdeck.com/">Fontdeck</a>.</p>
</div>

</div>

<script>
WebFontConfig = {
  custom: { families: ['TrilogFatfacExperSubseRegula', 'Trilogy Fatface Wide', 'Trilogy Egyptian Bold', 'Trilogy Fatface Expanded', 'Trilogy Sans Wide Regular', 'Trilogy Sans Compressed Heavy', 'TrilogEgyptiaExpandeExtrBol', 'Trilogy Egyptian Wide Bold', 'Trilogy Egyptian Expanded Bold', 'Trilogy Fatface Regular'],
    urls: [ 'http://f.fontdeck.com/s/css/uYeecfgxZsRY9yoFdZP/14nD1k8/<?php echo $_SERVER["HTTP_HOST"] ?>/11761.css' ] }
};

(function() {
    document.getElementsByTagName("html")[0].className += " wf-loading";
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();


// Dynamically change type size based on window size. Look Dad, no jQuery!

wraphandler = {
  init: function() {
    if (!document.getElementById) return;
    // set up the appropriate wrapper
    wraphandler.setWrapper();
    // and make sure it gets set up again if you resize the window
    wraphandler.addEvent(window,"resize",wraphandler.setWrapper);
  },

  setWrapper: function() {
    var theWidth = 0;
    if (window.innerWidth) {
	theWidth = window.innerWidth
    } else if (document.documentElement &&
                document.documentElement.clientWidth) {
	theWidth = document.documentElement.clientWidth
    } else if (document.body) {
	theWidth = document.body.clientWidth
    }
    if (theWidth != 0) {
      fontSize = Math.min(16,theWidth*0.9/50);
      document.getElementById('wrapper').style.fontSize = fontSize + "px";
    }
  },

  addEvent: function( obj, type, fn ) {
    if ( obj.attachEvent ) {
      obj['e'+type+fn] = fn;
      obj[type+fn] = function(){obj['e'+type+fn]( window.event );}
      obj.attachEvent( 'on'+type, obj[type+fn] );
    } else {
      obj.addEventListener( type, fn, false );
    }
  }
}

wraphandler.addEvent(window,"load",wraphandler.init);

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-132181-13']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

</body>
</html>
