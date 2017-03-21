<?php


$title = "fsstat";
$_id = "fsstat";

$searches = require __DIR__ . "/searches/config.php";
file_put_contents(__DIR__."/output/disk-searches.json", json_encode($searches));


$visulisations = require __DIR__ . "/visulisations/config.php";
file_put_contents(__DIR__."/output/disk-visulisations.json", json_encode($visulisations));


$dashs = require __DIR__ . "/dashboards/config.php";
file_put_contents(__DIR__."/output/disk-dashboards.json", json_encode($dashs));



