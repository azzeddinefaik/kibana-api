<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\visualization;
$searchSource = new \app\SearchSource("AZZ","desc","0", new app\SearchKibanaSavedObjectMeta("12","hil","[]","query"));
$searchObject = new \app\Search( "212121",$searchSource );
$searchObject->build();

$visualizationObject = new Visualization( "1",
    new app\VisalizationSource(
        $searchObject,
        new app\VisState( "test" )
    )
);
$visualizationObject->build();


$dashboardtest = (new app\Dashboard())->addWidget(
    new app\visualization\Disk( $visualizationObject, "1" )
)->generate();

print_r( $dashboardtest );