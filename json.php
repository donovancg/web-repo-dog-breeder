<?php

$str = file_get_contents('info.json');
$json = json_decode($str, true);

echo $json['puppies']['puppy-1']['price'];
echo getenv("REMOTE_ADDR");

?>