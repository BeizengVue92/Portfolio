<?php

$location = 'New York';

$queryString = http_build_query([
  'access_key' => '1a796c5007de0078d68ef77a1cf56fed',
  'query' => $location,
]);

$ch = curl_init(sprintf('%s?%s', 'https://api.weatherstack.com/current', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
curl_close($ch);

$api_result = json_decode($json, true);

echo "Current temperature in $location is {$api_result['current']['temperature']}℃", PHP_EOL;

?>