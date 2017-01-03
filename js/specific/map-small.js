// JavaScript Document
// JavaScript Document
$(document).ready(function() { 
	$('#map-small').gMap({
		
		 address: '2801 Technology Dr., Plano, Texas, 75074',
		 maptype: 'ROADMAP',
		 zoom: 14,
		 markers: [
			{
				address: "2801 Technology Dr., Plano, Texas, 75074",
				
				icon: {
					image: "img/blue.png",
					iconsize: [42, 51],
					iconanchor: [21,51]
				}							
			}
		 ],
		 doubleclickzoom: false,
		 controls: {
			 panControl: false,
			 zoomControl: true,
			 mapTypeControl: false,
			 scaleControl: false,
			 streetViewControl: false,
			 overviewMapControl: false
		 },            
	});
});