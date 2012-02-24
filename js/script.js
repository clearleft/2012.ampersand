/* Author: Bevan Stephens */


	// FITTEXT - TEXT RESIZING 
	
	$(".goodie header h1").fitText(0.475);
	$(".goodie header .event-info").fitText(2);
	$(".goodie .speakers h1").fitText(2.131);
	$(".goodie .speakers li").fitText(1.4);
	$(".goodie .tickets").fitText(1.1);
	$(".goodie section.sponsors h2").fitText(2.01);
	$(".goodie .en article.session h1").fitText(1.69);
	//$(".goodie .en.jake article.session h1").fitText(2.03);
	//$(".goodie .en.jason article.session h1").fitText(1.93);
	//$(".goodie .en.jose article.session h1").fitText(2.32);


	$(".goodie .sw header h1").fitText(0.535);
	$(".goodie .sw header .event-info").fitText(1.5);
	$(".goodie .sw .speakers h1").fitText(1.8);
	$(".goodie .sw section.sponsors h2").fitText(1.6);


	// LANGUAGE SWITCHER FORM ENHANCEMENT 
	
	$('#skinselection #submitskin').hide();
	
	$('#skinselection select').change(function() {
    	$(this).closest("form").submit();
	});
	
	// GOOGLE FONT LOADER
	
	WebFontConfig = {
	  custom: { families: ['TrilogFatfacExperSubseRegula', 'Trilogy Fatface Wide', 'Trilogy Egyptian Bold', 'Trilogy Fatface Expanded', 'Trilogy Sans Wide Regular', 'Trilogy Sans Compressed Heavy', 'TrilogEgyptiaExpandeExtrBol', 'Trilogy Egyptian Wide Bold', 'Trilogy Egyptian Expanded Bold', 'Trilogy Fatface Regular', 'Clobber Grotesk Regular', 'Clobber Grotesk Bold', 'Clobber Grotesk Demi-Bold' ],
	    urls: [ 'http://f.fontdeck.com/s/css/uYeecfgxZsRY9yoFdZP/14nD1k8/2012.ampersandconf.com/11761.css' ] }
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