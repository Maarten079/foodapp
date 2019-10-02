<?php

/**
 * @todo implement api key reader
 */

$secret = '';
$url = 'https://api.spoonacular.com/recipes/search?query=cheese&number=2&apiKey='.$secret;
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;