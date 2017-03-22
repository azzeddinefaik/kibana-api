<?php
require_once __DIR__ . '/vendor/autoload.php';
use app\visualization;

$test =  (new app\Dashboard())->addWidget(

    new app\visualization\Disk("1",

        new app\VisalizationSource("2",

            new app\VisState("test")
        )
    )
)->generate();
print_r($test);