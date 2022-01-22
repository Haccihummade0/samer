<?php
require 'simple_html_dom.php';

if (isset($_GET["url"])) {
	$a = $_GET["url"];
}else{
	$a = 123;
}

for ($i=0; $i < 300; $i++) { 
$rand = rand(1,9);

$url = "http://www.".$a.".com/login?username=".$rand;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if ($new) {
    echo "false"."<br>";
    echo $url;
    echo "<br>";
}else{
echo "done";
}
