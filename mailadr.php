<?
$text = "sascha.mester@gmx.de";
$pic=ImageCreate(150,30); //(breite, h?he)
$col1=ImageColorAllocate($pic,0,0,0);
$col2=ImageColorAllocate($pic,252,226,188);
ImageFilledRectangle($pic, 0, 0, 500, 30, $col2);
ImageString($pic, 3, 5, 8, $text, $col1);
Header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
Header("Content-type: image/jpeg");
ImageJPEG($pic);
ImageDestroy($pic);
?>