<?php
$adjetives = include("adjetives.php");
$nouns = include("nouns.php");

echo $adjetives[rand(0, count($adjetives))] . " " . $nouns[rand(0, count($nouns))];