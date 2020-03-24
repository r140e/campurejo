<?php
$url=file_get_contents("http://localhost:8080/geoserver/campurrejo/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=campurrejo%3Abatasadministrasi&outputFormat=application%2Fjson");
echo($url);
?>