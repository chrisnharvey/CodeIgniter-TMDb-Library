_Deprecated: Looking for a new maintainer for this package. Open an issue if interested._

This is the first library I have released which is a TMDb (The Movie Database) Library that I wrote that allows easy access to most of the methods in the TMDb API and returns the response in an array. It still needs a lot of work, but please let me know what you think and give me some feedback and suggestions.

First, you must set your TMDb API key in the tmdb.php config file.

Loading the library is simple and works in the usual way (no need to load the config file, this will be loaded as part of the library.

	$this->load->library('TMDb');

So now the library is loaded, you will want to make your first call. Usually you would call the TMDb API URL such as http://api.themoviedb.org/2.1/Movie.getInfo/en/json/APIKEY/187 but to call this same method using this library its as simple as.

	$data = $this->tmdb->call('Movie.getInfo', '187');

You can then use this $data array to show any of the nodes that would usually appear in the TMDb response. For example, if you wanted to show the name of the movie, you would write

	echo $data->name;

Thats a short example on how you can use this library, a more detailed documentation is coming soon.

Enjoy!
