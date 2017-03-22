<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\visualization;

$searchObject = new \app\Search( "212121",

    new \app\SearchSource("AZZ","desc","0", new app\SearchKibanaSavedObjectMeta("12","hil","[]","query"))
);

$searchObject->build();

$visualizationObject = new Visualization( "1",

    new app\VisalizationSource(

        $searchObject,
        new app\VisState( "test" )
    )
);

$visualizationObject->build();


$test = (new app\Dashboard())->addWidget(
    new app\visualization\Disk( $visualizationObject, "1" )
)->generate();

print_r( $test );