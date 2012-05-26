<?php

$siteName = $_GET['siteName'];
$origLink = $_GET['origLink'];

$path = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20feed%20where%20url%3D'http%3A%2F%2Ffeeds.feedburner.com%2F$siteName'%20AND%20guid%3D%22$origLink%22&format=json";

$ch = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, $path);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

$feed = curl_exec($ch);

curl_close($ch);


$feed = json_decode($feed);

$feed = $feed->query->results->item;
//return var_dump($feed);



include('views/article.tmpl.php'); 
