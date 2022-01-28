<?php
require "simple_html_dom.php";
for ($i=0; $i < 30; $i++) {
$arrayName = array("حسن","محمد","علي","احمد","خالد","ياسر","جاسم","خضر","خالد","سماعين","بسام","ابراهيم","عبود","عزيز","زهير","محمود","صلاح","سمير","حمود","فواز","خال","حسنالسالم","ضياء","عيسى","موسى","مؤيد","مهند","حجي","انس","عادل",);
$url = "http://www.1.com/login?username=".$arrayName[array_rand($arrayName)]."&password=111";
$html = file_get_html($url);
$new = $html->find("div.alert-back");
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