/* Author: Bevan

*/

// FITTEXT - TEXT RESIZING

$("header h1").fitText(0.475);
$("header .event-info").fitText(2.1);
$(".speakers h1").fitText(2.134);
$(".speakers li").fitText(1.4);
$(".tickets").fitText(1.1);
$("section.sponsors h2").fitText(2.01);
$("article.session h1").fitText(1.69);

// LETTERING.JS - KERNING

$("header h1").lettering();

// Joshje's Feature Detection [https://gist.github.com/1149224]

// Usage (JS styles are camelCase):
document.getElementsByTagName('html')[0].className += supports('transitionProperty')? ' transitions' : ' no-transitions';
document.getElementsByTagName('html')[0].className += supports('box-flex')? ' box-flex' : ' no-box-flex';
document.getElementsByTagName('html')[0].className += supports('flex-box')? ' flex-box' : ' no-flex-box';
