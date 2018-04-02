<?php include '../contact/config.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Alpha Revolution Technology</title>
        <meta name="description" content="We provide consultation services, products, systems, technologies, and solutions!">
        <meta name="keywords" content="automatic vehicle locating systems,vehicle locating system,zigbee vs bluetooth,wireless technologies,industrial automation malaysia,avls malaysia,abb uk,home automation malaysia,rtu in malaysia,wireless technologies in malaysia,asia gps technologies,text erotic,erotic ascii,ascii art">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    /* Paste this css to your style sheet file or under head tag */
    /* This only works with JavaScript,
    if it's not present, don't show loader */
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
    	position: fixed;
    	left: 0px;
    	top: 0px;
    	width: 100%;
    	height: 100%;
    	z-index: 9999;
    	background: url(img/loader.gif) center no-repeat #fff;
    }
    /*.gm-style-iw{width:500px}*/
    </style>

    </head>

    <body style="margin:0;">
  	<div class="se-pre-con"></div>

			<div id="map" style="width:100%;height:100%"></div>


	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

	<script src="https://www.alpharevolution.com.my/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.js"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.easing.1.3.js"></script>
  <script src="https://www.alpharevolution.com.my/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo(GAPI); ?>"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.isotope.min.js"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.nicescroll.min.js"></script>
	<script src="https://www.alpharevolution.com.my/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="https://www.alpharevolution.com.my/js/skrollr.min.js"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.localscroll-1.2.7-min.js"></script>
  <!-- <script src="js/customwindow.jquery.js"></script> -->
	<script src="https://www.alpharevolution.com.my/js/stellar.js"></script>
	<script src="https://www.alpharevolution.com.my/js/jquery.appear.js"></script>
	<script src="https://www.alpharevolution.com.my/js/validate.js"></script>
    <script src="https://www.alpharevolution.com.my/js/main.js"></script>

        <script type="text/javascript">
        $(window).load(function() {
          // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");
          init();
        });

            // When the window has finished loading create our google map below
            // google.maps.event.addDomListener(window, 'load', init);
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var lokasi = new google.maps.LatLng(3.0246535,101.5892831); // Taman Industri Subang
                var mapOptions = {
                    scrollwheel: false,
                    disableDefaultUI: true, // a way to quickly hide all controls
                    // mapTypeControl: false,
                    scaleControl: true,
                    zoomControl: true,
                    zoomControlOptions: {
                      style: google.maps.ZoomControlStyle.LARGE
                    },
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,
                    // The latitude and longitude to center the map (always required)
		                center: lokasi,
                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{		featureType:"all",		elementType:"all",		stylers:[		{			invert_lightness:true		},		{			saturation:10		},		{			lightness:30		},		{			gamma:0.5		},		{			hue:"#00A2E8"		}		]	}	]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                map.setTilt(45);// hybrid & satellite

            }
        </script>
	</body>
</html>
