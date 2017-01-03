// JavaScript Document

$(document).ready(function() { 
	$('#map').gMap({
		
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
			 panControl: true,
			 zoomControl: true,
			 mapTypeControl: true,
			 scaleControl: false,
			 streetViewControl: false,
			 overviewMapControl: false
		 },            
	});
});
