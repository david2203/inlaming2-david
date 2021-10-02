<?php

echo "2 posts: </br></br>";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/labb2-david/wordpress/wp-json/wp/v2/posts?oauth_consumer_key=ck_2ab5a5ed723db11636521ff90f51004022c4623c&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1633079875&oauth_nonce=Db1J8fvuEMR&oauth_version=1.0&oauth_signature=jm7Nn%252ByjXjUOGgjCrN6WLEjEryQ%253D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo ($response);

echo "</br></br> 5 products: </br> </br>";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/labb2-david/wordpress/wp-json/wc/v3/products?oauth_consumer_key=ck_2ab5a5ed723db11636521ff90f51004022c4623c&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1633177582&oauth_nonce=A1g5ibpq48s&oauth_version=1.0&oauth_signature=TeYNmnJeQ4Re8z%252BS940n4bdQlWg%253D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

echo "</br></br> Orders: </br> </br>";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/labb2-david/wordpress/wp-json/wc/v3/orders?oauth_consumer_key=ck_2ab5a5ed723db11636521ff90f51004022c4623c&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1633177628&oauth_nonce=lXsi3kPwnHt&oauth_version=1.0&oauth_signature=9%252F8Pipzzz9gX0U9KRzh9Cb90Vmw%253D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

