<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\visualization;

$kibanMeta = new app\SearchKibanaSavedObjectMeta(
    "metricbeat-*",
    "{
    \"pre_tags\": [
      \"@kibana-highlighted-field@\"
    ],
    \"post_tags\": [
      \"@/kibana-highlighted-field@\"
    ],
    \"fields\": {
      \"*\": {}
    },
    \"require_field_match\": false,
    \"fragment_size\": 2147483647
  }",
    "[]",
    "metricset.module: system AND metricset.name: fsstat"
);

$searchSource = new \app\SearchSource( "Ahmed-source", "descriptions", 0, $kibanMeta);

$searchObject = new \app\Search( "1234", $searchSource );

$searchObject->build();



$agg     = new \app\Aggregations( "1", "avg", "metric", true,
    ["field"       => "system.fsstat.total_size.total",
     "customLabel" => "Total disk space"] );



$visualizationObject = new Visualization( "1",
    new app\VisalizationSource(
        $searchObject,
        new app\VisState( "v-State",
            $agg
        )
    )
);
$visualizationObject->build();


$dashboardtest = (new app\Dashboard())->addWidget(
    new app\visualization\Disk( $visualizationObject, "1" )
)->generate();

print_r( $dashboardtest );