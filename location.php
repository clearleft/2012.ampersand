<?php include("includes/head.php"); ?>

<body id="wrapper" class="vevent location">

<?php include("includes/header.php"); ?>

	<!-- LOCATION -->
	<article class="section location clearfix">
		
		<h2>Brighton is one of the most vibrant, colourful and creative cities in Europe. It has a rich typographic history, including being the <a href="http://en.wikipedia.org/wiki/Eric_Gill#Life">birthplace of Eric Gill.</a></h2>
		
		<div class="map">
			<div id="map_canvas"></div>
		</div>
		
		<div class="location-a">
			<h3 >Pre-Part<em class="swsh">y</em></h3>
			<address>
			[Sponsored by <a href="">MyFonts</a>]</br >
			<strong>The Basement,</strong></br > 24 Kensington Street,</br > 
			Brighton,
			BN1 4AJ, UK
			</address>
		</div>
		
		<div class="location-b">
			<h3 >Con<em class="swsh">f</em>erence</h3>
			<address>
			<strong>Brighton Dome Corn <br />Exchange</strong><br /> 
			Church Street,<br /> 
			Brighton, BN1 1UG, UK
			</address>
		</div>
		
		<div class="location-c">
			<h3 >After Part<em class="swsh">y</em></h3>
			<address>
			<strong>Above Audio</strong> <br />
			10 Marine Parade, <br />
			Brighton<br />
			BN2 1TL, UK
			</address>
		</div>
		
		<p>Cosmopolitan, compact, energetic, unique, fun, lively, historic, young, exotic and free-spirited, Brighton is a city like no other. 
		Why not spend the weekend here after the conference! More information is available from <a href="http://visitbrighton.com">visitbrighton.com</a></p>
		
		<h4><span><span class="char1">A</span><span class="char1">c</span><span class="char1">c</span>ommodatio<em class="swsh">n</em></span></h4>
		
		<address class="accommodation-a">
			<strong>myhotel</strong></br>
			17 Jubilee Street, BN1 1GE</br>
			+44 (0) 1273 900 300</br>
			<a href="http://www.myhotels.com/my-hotel-brighton/index.html">Website</a>
		</address>
		
		<address class="accommodation-b" >
			<strong>Old Ship Hotel</strong></br>
			31-38 Kings Road, BN1 1GE</br>
			+44 (0)1273 329 001</br>
			<a href="http://www.oldship-brighton.com/">Website</a>
		</address>
		
		<address class="accommodation-c" >
			<strong>Premier Inn</strong></br>
			144 North Street, BN1 1GE</br>
			+44 (0)87 0990 6340</br>
			<a href="http://www.premierinn.com/en/hotel/BRIPTI/brighton-city-centre">Website</a>
		</address>
					
	</article>
	
	
		
<?php include("includes/footer.php"); ?>
	
	<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBsKKks40lHQ0Bos_XjCqKqqSDfW8V54MA&sensor=false">
    </script>
    <script type="text/javascript">
      (function() {
      
      	 var victorianStyles = [
		    {
		      featureType: "all",
		      stylers: [
		        { saturation: -100 },
		        { hue: "#F4F4DC" },
		        { saturation: 5 }
		      ]
		    }
		  ];
		  
	  	var victorianMapType = new google.maps.StyledMapType(victorianStyles,
		{name: "Victorian Map"});
      
        var myOptions = {
          center: new google.maps.LatLng(50.82426, -0.13821),
          zoom: 14,
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'victorian_map']
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
            
        var MarkerImageA = 'img/map-marker-a.png';
        var MarkerImageB = 'img/map-marker-b.png';
		var MarkerImageC = 'img/map-marker-c.png';
            
        var markerA = new google.maps.Marker({
    		position: new google.maps.LatLng(50.82624, -0.13821),
    		animation: google.maps.Animation.DROP,
    		title:"The Basement",
    		icon: MarkerImageA
		});
		
		var markerB = new google.maps.Marker({
    		position: new google.maps.LatLng(50.82371, -0.13908),
    		animation: google.maps.Animation.DROP,
    		title:"Brighton Dome Corn Echange",
    		icon: MarkerImageB
		});
		
		var markerC = new google.maps.Marker({
    		position: new google.maps.LatLng(50.82002, -0.13445),
    		animation: google.maps.Animation.DROP,
    		title:"Above Audio",
    		icon: MarkerImageC
		});
		setTimeout(function(){
			markerA.setMap(map);
		}, 1000);
		setTimeout(function(){
			markerB.setMap(map);
		}, 1500);
		setTimeout(function(){
			markerC.setMap(map);
		}, 2000);

		map.mapTypes.set('victorian_map', victorianMapType);
  		map.setMapTypeId('victorian_map');
  		animateMarkers();
		
		
      })();
    </script>

</body>
</html>
