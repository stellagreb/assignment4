<?php

// kvstore API url

$url = 'https://billboard-api2.p.rapidapi.com/hot-100?range=1-10&date=2021-12-01';


// Initializes a new cURL session
$curl = curl_init($url);

// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: billboard-api2.p.rapidapi.com',
  'X-RapidAPI-Key: L4VPYm2tXVmsh9tP654PCM0D8XqPp1zhglTjsnYje2UkP3hy2e'
]);

// Execute cURL request with all previous settings
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

echo $response . PHP_EOL;