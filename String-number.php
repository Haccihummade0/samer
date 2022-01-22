<?php
require 'simple_html_dom.php';

if (isset($_GET["url"])) {
	$a = $_GET["url"];
}else{
	$a = 123;
}

for ($i=0; $i < 300; $i++) { 

$str = substr(str_shuffle("ABCDEFJHIJKLMNOPQRSTUVWXYZ"),1,1);
$ran = rand(111,999);
$url = "http://www.".$a.".com/login?username=".$str.$ran;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if ($new) {
    echo "FALSE"."\n";
    echo $url;
    echo "\n";
}else{
echo "Done";
}
}
