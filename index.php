<?php

$index = 1;

if(!file_exists("silk_images")){
    mkdir("silk_images");
}

$BasePath = getcwd();
// file_put_contents($BasePath."\silk_images\slik_images".$index.".png",file_get_contents('https://img.sixlogics.com/horse-racing/silk-images/20220305/20220305don142001.png'));

// $this->cat  ch_email_attachment();

for($i=1; $i<11; $i++) {
    $index = ($index<10)? '0'.$index : $index;
    $url = "https://img.sixlogics.com/horse-racing/silk-images/20220305/20220305don1420".$index.".png"; /** NOTE: 1 -> 10 */
    file_put_contents($BasePath."\silk_images\slik_images".$index.".png",file_get_contents($url));
    $index++;
}
if(!file_exists("silk_images2")){
    mkdir("silk_images2");
}
$index=1;
for($i=1; $i<10; $i++) {
    $index = ($index<10)? '0'.$index : $index;
    $url2 = "https://img.sixlogics.com/horse-racing/silk-images/20220305/20220305don1530".$index.".png"; /** NOTE: 1 -> 9 */
    file_put_contents($BasePath."\silk_images2\slik_images".$index.".png",file_get_contents($url));
    $index++;
}
if(!file_exists("silk_images3")){
    mkdir("silk_images3");
}
$index=1;
for($i=1; $i<10; $i++) {
    $index = ($index<10)? '0'.$index : $index;
    $url3 = "https://img.sixlogics.com/horse-racing/silk-images/20220305/20220305don1455".$index.".png"; /** NOTE: 1 -> 9 */
    $img = file_get_contents($url);
    file_put_contents($BasePath."\silk_images3\slik_images".$index.".png",file_get_contents($url));
    $index++;
}



