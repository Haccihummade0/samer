<?php
require 'simple_html_dom.php';

if (isset($_GET["url"])) {
	$a = $_GET["url"];
}else{
	$a = 123;
}

if (isset($_GET["num"])) {
for ($i=0; $i < 300; $i++) { 
$rand = rand(1,9);

$url = "http://www.".$a.".com/login?username=".$rand;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if (!$new) {
    echo "done"."<br>";
    echo $url;
    echo "<br>";
}
}
}

if (isset($_GET["num2"])) {
for ($i=0; $i < 300; $i++) { 
$rand = rand(11,99);
$url = "http://www.".$a.".com/login?username=".$rand;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if (!$new) {
    echo "done"."<br>";
    echo $url;
    echo "<br>";
}
}
}

if (isset($_GET["num3"])) {
for ($i=0; $i < 300; $i++) { 
$rand = rand(111,999);
$url = "http://www.".$a.".com/login?username=".$rand;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if (!$new) {
    echo "done"."<br>";
    echo $url;
    echo "<br>";
}
}
}

if (isset($_GET["num0"])) {
for ($i=0; $i < 300; $i++) { 
$rand = rand(1,9);
$n = 000;
$url = "http://www.".$a.".com/login?username=".$rand.$n.$n.$n;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if (!$new) {
    echo "done"."<br>";
    echo $url;
    echo "<br>";
}
}
}
if (isset($_GET["str"])) {
	

for ($i=0; $i < 300; $i++) { 

$str = substr(str_shuffle("ABCDEFJHIJKLMNOPQRSTUVWXYZ"),1,1);
$ran = rand(111,999);
$url = "http://www.".$a.".com/login?username=".$str.$ran;
$html = file_get_html($url);
$new = $html->find("div.alert3");
if (!$new) {
    echo "done"."<br>";
    echo $url;
    echo "<br>";
}
}
}

/*	
for ($i=0; $i < 300; $i++) { 
$rand = rand(1,9);
$n = 000;
$url = "http://www.123.com/login?username=".$rand.$n.$n.$n;
$html = file_get_html($url);
!$new = $html->find("div.alert3");
if (!$new) {
    echo "done"."<br>";
    echo $url;
    echo "<br>";
} else {
    echo "true";
}
}
}
*/
?>