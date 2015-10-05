<?php
$file = fopen("setting.json", "r") or die("Unable to open file!");
$settings = fread($file, filesize("setting.json"));
$settings = json_decode("$settings", true);
fclose($file);
?>
