<?php 

/**Loads in the API data from configuration.XML */
$twin_cities = "live";
	$config = simplexml_load_file(__DIR__."/configuration.xml");

    //assigns the weather API keys from the xml file to arrays 
$liv_weather = array(
    'key' => $config->openweatherLiv->key

);

$no_weather =array(
    'key' => $config->openweatherNo->key

);
    //assigns the google map API keys to arrays
$google_maps_liv = array(
    'key' => $config->googlemapskeyLiv->key
);

$google_maps_no = array(
    'key' => $config->googlemapskeyNo->key
);

?>