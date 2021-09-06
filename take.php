<?php
$url = file_get_contents("https://corona.lmao.ninja/countries?sort=country");
$url2 = json_decode($url, true);
$reverse = array_reverse($url2);

echo "<pre>";
print_r($reverse);
echo "</pre>";


?>