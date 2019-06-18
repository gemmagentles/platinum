<?php

namespace WPGMZA;

$dir = wpgmza_get_basic_dir();

wpgmza_require_once($dir . 'includes/class.factory.php');
wpgmza_require_once($dir . 'includes/class.crud.php');
wpgmza_require_once($dir . 'includes/class.map.php');

class ProMap extends Map
{
	public function __construct($id_or_fields=-1)
	{
		Map::__construct($id_or_fields);
	}
	
	public function isDirectionsEnabled()
	{
		global $wpgmza;
		
		if($wpgmza->settings->engine != "google-maps")
			return false;
		
		if($this->directions_enabled == "1")
			return true;
		
		return false;
	}
}

add_filter('wpgmza_create_WPGMZA\\Map', function($id_or_fields) {
	
	return new ProMap($id_or_fields);
	
});
