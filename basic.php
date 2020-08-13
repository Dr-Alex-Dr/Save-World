<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Save World</title>
	<link rel="stylesheet" type="text/css" href="css/stil.css">
	<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;1,400;1,600;1,700;1,800&family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="statick/ColChars.js"></script>
	<script type="text/javascript " src="statick/PieChars.js"></script>
	<script src="map/map.js"></script>
	<script src="map/markerclusterer.js"> </script>
	<script defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDteoFnu41ClZS5lMYyTyMqgAfy9O5EJT8&callback=initMap&libraries=&v=weekly"
    ></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
   


</head>
<body>

	 <header>
	 	<div class="container">
	 	<div class="head">
	 		<img src="/image/logo 0.8.png" alt="">
	 		<ul class="top-menu">
	 			<li><a href="#">HOME</a></li>
	 			<li><a href="#map" class="scrollto">MAP</a></li>
	 			<li><a href="">INFORMATION</a></li>
	 			<li><a href="">CONTACT</a></li>
	 		</ul>
	 	</div>

	 	<div class="info">
	 		

	 		<div>
	 		<h2>Save World</h2>

	 		<p>Nowadays, the problem of pollution of the planet is very relevant. 
To prevent this from happening in the future, 
each of us can help in solving it.
</p>
			<button>I'm ready</button>

		</div>

		<img src="image/0.3.png"  width="490" height="390" class="info-img" alt="" class="info-img">
	 	</div>
	 	 <div class="block">
	 		<div class="cc cc_block">

 				<div class="block_title"
	 			<p><p id="GLH">
Global warming</p> <p id="TEX"> 
long term increase
average temperature
climate system<p id="ETH">Earth</p>
happening
for more than a century, the main reason for which is
human activity.</p>
</p>
				</div>

	 			 <div id="chart_divC"></div>

	 		</div>	

	 		<div class="header_about">
	 			<h2>Карта несанкционированных свалок по всему меру</h2>
	 		</div>				
			
	 </div>
		</div>
	 </header>

	 <main>
	 	
	 	<div id="map"></div>
	 </main>

	<script type="text/javascript" src="scrol.js"></script>


	 
	 
</body>
</html>