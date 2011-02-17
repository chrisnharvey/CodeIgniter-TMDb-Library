<?php

class Tmdb_test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->library("TMDb");
		
		// Configurable Options
		$api_key = 'APIKEY'; // Your TMDb API Key
		$method = 'Movie.getInfo'; // A supported TMDb API method
		$tmdb_movie_id = '105'; // A TMDb movie id (for use in this example)
		
		
		$call = $this->tmdb->call($api_key, $method, $tmdb_movie_id);
		
		echo "<pre>";
		
		echo "Name: ".$call->name;
		echo "\nOverview: ".$call->overview;
		
		echo "</pre>";
		
		
	}
}

/* End of file tmdb.php */