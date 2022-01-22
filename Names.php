<?php
require "simple_html_dom.php";
for ($i=0; $i < 20; $i++) { 
$arrayName = array("حسن","محمد","علي","احمد","خالد","ياسر","جاسم","خضر","خالد","سماعين","بسام","ابراهيم","عبود","عزيز","زهير","محمود",);
$url = "http://www.123.com/login?username=".$arrayName[array_rand($arrayName)];
$html = file_get_html($url);
$new = $html->find("div.alert3");
if ($new) {
    echo "FALSE"."\n";
    echo $url;
    echo "\n";
}else{
	echo "Done"."\n";
echo $url;
}
}die
?>
