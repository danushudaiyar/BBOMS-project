<?Php
header ("Content-type: image/jpg");
 
$name=$_POST['name'];   // Text to be written on Image. 
$donation=$_POST['donation'];  // Grade to be written 
$x=250; // X - Postion of text. 
$y=210; // Y- Postion of text . 
///// Add Name to the image ////////
$file_name='certifigate.jpg'; // Image collected
$img_source = imagecreatefromjpeg($file_name); // Image created
$text_color = imagecolorallocate($img_source, 19, 21, 22);

ImageString($img_source,10,$x,$y,$name,$text_color); //  
/// add grade ////
$x=260; // X - Postion of text. 
$y=320; // Y- Postion of text . 
$text_color = imagecolorallocate($img_source, 19, 21, 22);
ImageString($img_source,50,$x,$y,$donation,$text_color); //  
/// add date ////
$today   = new DateTime;
$str_date=$today->format('Y-M-d ');

$x=421; // X - Postion of text. 
$y=405; // Y- Postion of text . 
$text_color = imagecolorallocate($img_source, 19, 21, 22);
ImageString($img_source,25,$x,$y,$str_date,$text_color); //  

//ImageJpeg ($img_source,'gd-template2.jpg'); // image saved 
ImageJpeg ($img_source); // image saved 
imagedestroy($img_source); //memory is removed. 
?>