<?php


$titles = [ "fsstats", "filesystem" ];
$_ids = [ "fsstats", "filesystem" ];
$_visIds =  [ "fsstats-vis", "filesystem-vis" ];
foreach ($_ids as $k => $v) {
    $title = $titles["$k"];
    $_id = $_ids["$k"];
    $_visId = $_visIds["$k"];
    $searches = require __DIR__ . "/searches/config.php";
    file_put_contents( __DIR__ . "/output/disk-searches-".$_id.".json", json_encode( [$searches] ) );

    $visulisations = require __DIR__ . "/visulisations/config.php";
    file_put_contents( __DIR__ . "/output/disk-visulisations-".$_id.".json", json_encode( [$visulisations] ) );
 }

$dashs = require __DIR__ . "/dashboards/config.php";
file_put_contents( __DIR__ . "/output/disk-dashboards.json", json_encode( [$dashs] ) );

