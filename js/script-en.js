/*!	
* FitText.js 1.0 jQuery free version
*
* Copyright 2011, Dave Rupert http://daverupert.com 
* Released under the WTFPL license 
* http://sam.zoy.org/wtfpl/
* Modified by Slawomir Kolodziej http://slawekk.info
*
* Date: Tue Aug 09 2011 10:45:54 GMT+0200 (CEST)
*/
(function(){
  var css = function (el, prop) {
    return window.getComputedStyle ? getComputedStyle(el).getPropertyValue(prop) : el.currentStyle[prop];
  };
  
  var addEvent = function (el, type, fn) {
    if (el.addEventListener)
      el.addEventListener(type, fn, false);
		else
			el.attachEvent('on'+type, fn);
  };

  window.fitText = function (el, kompressor) {

    var settings = {
        'minFontSize' : Number.NEGATIVE_INFINITY,
        'maxFontSize' : Number.POSITIVE_INFINITY
	};

    var fit = function (el) {
      var compressor = kompressor || 1;

      var resizer = function () {
        //el.style.fontSize = Math.min(el.clientWidth / (compressor * 10), origFontSize) + 'px';
         el.style.fontSize = Math.max(Math.min(el.clientWidth / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)) + 'px';
      };

      // Call once to set.
      resizer();

      // Bind events
      // If you have any js library which support Events, replace this part
      // and remove addEvent function (or use original jQuery version)
      addEvent(window, 'resize', resizer);
    };

    if (el.length)
      for(var i=0; i<el.length; i++)
        fit(el[i]);
    else
      fit(el);

    // return set of elements
    return el;
  };
})();


// FITTEXT - TEXT RESIZING 

fitText(document.getElementById('mainTitle'), 0.6);
fitText(document.getElementById('description'), 1.5);
fitText(document.getElementById('whereWhen'), 2);
fitText(document.getElementById('ticketInfo'), 1.1);
if(document.getElementById('speakersTitle')){
	fitText(document.getElementById('speakersTitle'), 2.15);
}
if(document.getElementById('speakersList')){
	fitText(document.getElementById('speakersList'), 5);
}
fitText(document.getElementById('sponsorsTitle'), 2);

if(document.getElementById('sessionTitle')){
	fitText(document.getElementById('sessionTitle'), 1.69);
}

// LANGUAGE SWITCHER FORM ENHANCEMENT 
	
document.getElementById('languageSubmit').style.display='none';
	
		
	
	
	
	
	