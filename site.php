<?php
// If "siteName" isn't in the querystring, set the default site name to 'nettuts'
$siteName = empty($_GET['siteName']) ? 'CrossfitProvidenceCrossfitWod' : $_GET['siteName'];

$siteList = array(
   'CrossfitProvidenceCrossfitWod',
   'CrossfitProvidenceElementsWod',
   'CrossfitEvents',
   'cfpBootCampBlog'
);


$cache = dirname(__FILE__) . "/cache/$siteName";

//return var_dump($cache);

// Re-cache every three hours
if(filemtime($cache) < (time() - 30))
{
   // Get from server
   if ( !file_exists(dirname(__FILE__) . '/cache') ) {
      mkdir(dirname(__FILE__) . '/cache', 0777);
   }
   // YQL query (SELECT * from feed ... ) // Split for readability
   $path = "http://query.yahooapis.com/v1/public/yql?q=";
   $path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/$siteName'");
   $path .= "&format=json";
   

   $ch = curl_init();
   $timeout = 5; // set to zero for no timeout
   curl_setopt ($ch, CURLOPT_URL, $path);
   curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
   
   $feed = curl_exec($ch);
   
   curl_close($ch);

   
   // If something was returned, cache
   if ( is_object($feed) && $feed->query->count ) {
      $cachefile = fopen($cache, 'wb');
      fwrite($cachefile, $feed);
      fclose($cachefile);
   }
}
else
{
   // We already have local cache. Use that instead.
   $feed = file_get_contents($cache);
}



// Decode that shizzle
$feed = json_decode($feed);

// Activetuts is still using the old Flashtuts RSS path.
if ( $siteName === 'flashtuts' ) $siteName = 'activetuts';
else if ( $siteName === 'webdesigntutsplus' ) $siteName = 'webdesigntuts';

// Include the view
include('views/site.tmpl.php');

