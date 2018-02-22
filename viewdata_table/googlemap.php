<!DOCTYPE html>
<html>
<head>
	<title>Google Map</title>
	<style type="text/css">
		
		* {
			margin: 0;
			padding: 0;
		}

		#map {
			height: 500px;
			width: 500px;
			align-content: center;
		}
	</style>
</head>
<body>
	<div id="map"></div>

	<script>
		function initMap () {
			var location = {lat: 14.425923, lng: 120.969886};
			var map = new google.maps.Map(document.getElementById("map"), {
				zoom: 16, 
				center: location
			});
			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
		}
		
	</script>

	<script async defer src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4Tr0woEIQ5_TphGeBCair2Zo7iG1ALJo&callback=initMap"></script>

</body>
</html>