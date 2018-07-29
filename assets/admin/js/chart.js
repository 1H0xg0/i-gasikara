var regions = {Diana: {longmin: 5333279.5285275,
					longmax: 5484930.5926242,
					latmin: -1555904.8989506,
					latmax: -1339435.2348771},
				 Sava: {longmin:5491045.5548862,
					longmax:5613344.80012,
					latmin:-1756475.66114,
					latmax:-1442166.600878},
				Sofia: {longmin:5269683.9210031,
					longmax:5461693.7360288,
					latmin:-1823740.2460245,
					latmax:-1603601.6045939},
				Analanjirofo: {longmin:5473923.6605527,
					longmax:5563202.1095774,
					latmin:-1986398.2421928,
					latmax:-1728346.8347379},
				Boeny: {longmin:5000625.5814768,
					longmax:5248893.0493125,
					latmin:-1904457.7478825,
					latmax:-1725900.8498331},
				Betsiboka: {longmin:5151053.6531211,
					longmax:5347955.4379563,
					latmin:-1999851.1591691,
					latmax:-1860430.0195963},
				Melaky: {longmin:4893002.2456662,
					longmax:5093573.007858,
					latmin:-2167401.1251469,
					latmax:-1832301.1931913},
				Bongolava: {longmin:5097241.985215,
					longmax:5188966.4191452,
					latmin:-2193083.9666471,
					latmax:-2020642.0308598},
				AlaotraMangoro: {longmin:5351624.41531,
					longmax:5409105.06057,
					latmin:-2224881.7704093,
					latmax:-1859207.0271439},
				Atsinanana: {longmin:5444571.841695,
					longmax:5506944.4567673,
					latmin:-2309268.2496244,
					latmax:-1999851.1591691},
				Analamanga: {longmin:5217095.2455503,
					longmax:5330833.5436228,
					latmin:-2171070.102504,
					latmax:-2029202.9780265},
				Itasy: {longmin:5186520.4342404,
					longmax:5275798.8832651,
					latmin:-2178408.0572184,
					latmax:-2123373.396860},
				Vakinankaratra: {longmin:5110694.9021921,
					longmax:5305150.7021225,
					latmin:-2289700.3703861,
					latmax:-2199198.9289091},
				AmoronIMania: {longmin:5103356.9474777,
					longmax:5295366.7625034,
					latmin:-2366748.8948869,
					latmax:-2295815.3326481},
				VatovavyFitovinany: {longmin:5280690.8530747,
					longmax:5368746.3096469,
					latmin:-2534298.8608646,
					latmax:-2326390.1439579},
				Menabe: {longmin:4933360.9965952,
					longmax:5085012.060691,
					latmin:-2456027.343911,
					latmax:-2144164.2685514},
				MatsiatraAmbony: {longmin:5080120.0908823,
					longmax:5267237.9360983,
					latmin:-2491494.1250309,
					latmax:-2394877.7212919},
				Ihorombe: {longmin:5048322.28712,
					longmax:5228102.17762,
					latmin:-2639476.2117704,
					latmax:-2487825.1476737},
				AtsimoAndrefana: {longmin:4814730.7287131,
					longmax:5007963.5361911,
					latmin:-2879182.732439,
					latmax:5018970.4682627},
				AtsimoAtsinanana: {longmin:5255008.0115744,
					longmax:5310042.6719321,
					latmin:-2743430.5702238,
					latmax:-2548974.7702933},
				Anosy: {longmin:5096018.99276,
					longmax:5266014.94364,
					latmin:-2891412.6569633,
					latmax:-2599117.4608414},
				Androy: {longmin:4962712.8154526,
					longmax:5131485.77388,
					latmin:-2940332.355059,
					latmax:-2737315.6079618}
				};
$(document).ready(function() {
	init_map();
});
function init_map() {
	console.log('call');
	map = new OpenLayers.Map("chartMap");
	var mapnik = new OpenLayers.Layer.OSM();
	map.addLayer(mapnik);
	map.setCenter(new OpenLayers.LonLat(47.5361300, -18.9136800) // Centre de la carte
	  .transform(
	    new OpenLayers.Projection("EPSG:4326"), // transformation de WGS 1984
	    new OpenLayers.Projection("EPSG:900913") // en projection Mercator sphérique
	  ), 6 // Zoom level
	);/*
	map.events.register("click", map, function(e) {
		var position = map.getLonLatFromPixel(e.xy);
		var region = get_region(position.lon, position.lat);
		if(region != undefined) {
			var rand = getRandomArbitrary();
			/*var html = "<h3>Données de la région "+region+
				"<ul>"+
					"<li>Site de télécom : *******</li>"+
					"<li>Réseaux cellulaires: "+(rand <= 1 ? "Telma" : (rand == 2 ? "Telma, Airtel" : "Telma, Airtel, Orange"))+
					"<li>Plans logistiques de déploiement: une stratégie spéciale"+
					"<li>Bureau de vote et entrepot CENI: **********"+
					"<li>Zones sensibilisées "+ 
					"<li>Zones à sensibiliser: "+(rand <= 1 ? "oui" : "non")+
					"<li>Sécurité électorale: à prendre en main"+
					"<li>Élection: nombre d’électeurs, taux de participation, résultat"+
				"</ul>";
			$('#information_map').html(html);
			console.log(html);
		}
	});*/
}
function getRandomArbitrary() {
	return Math.round(Math.random() * 3);
}
function get_region(long, lat) {
	var region;
	Object.keys(regions).forEach(function(key) {
		if(regions[key]['longmin'] <= long && long <= regions[key]['longmax'] && regions[key]['latmin'] <= lat && lat <= regions[key]['latmax']) {
		region = key;	
		}
	});
	return region;
}
