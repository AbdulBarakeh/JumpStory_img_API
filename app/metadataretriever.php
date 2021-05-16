
<?php

/* Create the object */
$im = new imagick("/resources/testImg.jpg");

/* Get the EXIF information */
$exifArray = $im->getImageProperties("exif:*");

/* Loop trough the EXIF properties */
foreach ($exifArray as $name => $property)
{
    echo "{$name} => {$property}<br />\n"; 
}

?>
