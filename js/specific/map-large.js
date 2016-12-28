// JavaScript Document

$(document).ready(function() { 
	$('#map').gMap({
		
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
			 panControl: true,
			 zoomControl: true,
			 mapTypeControl: true,
			 scaleControl: false,
			 streetViewControl: false,
			 overviewMapControl: false
		 },            
	});
});
