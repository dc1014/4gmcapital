// JavaScript Document
// JavaScript Document
$(document).ready(function() { 
	$('#map-small').gMap({
		
		 address: '651 N. Plano Rd. Suite 429, Richardson, Texas, 75081',
		 maptype: 'ROADMAP',
		 zoom: 14,
		 markers: [
			{
				address: "651 N. Plano Rd. Suite 429, Richardson, Texas, 75081",
				
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