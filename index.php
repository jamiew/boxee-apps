<?php
$fp = fopen($_SERVER["SCRIPT_FILENAME"], "r");
$etag = md5(serialize(fstat($fp)));
fclose($fp);
header('Etag: '.$etag);
header ("content-type: application/xml"); 
include("index.xml");
?>