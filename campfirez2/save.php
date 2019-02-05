<?php 
$chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'y', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
$endStr = "";
for($ii = 0; $ii < 36; $ii++){
$yoyo = rand(0,35);
$endStr .= $chars[$yoyo];
}
file_put_contents($endStr.'.jpg', base64_decode(explode(',',$_POST["picture"])[1]));
echo $endStr;
?>
