<?php 

$section = array();
$section[1]["title"] = "FEATURED ITEMS";
$section[1]["products"] = [1,2,3,4,5,6];

$section[2]["title"] = "BEST SELLERS";
$section[2]["products"] = [1,2,3,4,5,6];

$section[3]["title"] = "NEW ARRIVAL";
$section[3]["products"] = [1,2,3,4,5,6];


$sliderimage = array();
$sliderimage[1]["slider_image"] = 'assets/images/hero/7.jpg';
$sliderimage[2]["slider_image"] = 'assets/images/hero/hero-2.png';
$sliderimage[3]["slider_image"] = 'assets/images/hero/hero-3.png';

$middlebannerimage = 'assets/images/banner/main-banner_1170x350.jpg';

return [
'colors' =>['#FF0000'=>'red', '#FFFF00'=>'yellow', '#FFA500'=>'orange', 		'#008000'=>'green', '#87CEEB'=>'skyblue'] ,

'sizes' =>['XS','S', 'M', 'XL', 'XXL'] ,


'sections' => $section,


'sliderimages' => $sliderimage,

'middlebannerimages' => $middlebannerimage,



];