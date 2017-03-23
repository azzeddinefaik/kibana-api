<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\visualization;

(new \app\Dashboard())->addWidget(

    (new visualization\Disk())->setVisualization(

        (new Visualization("0011"))->setVisalizationSource(

            (new \app\VisalizationSource())->addVisState(

                (new \app\VisState())->addAggs(

                    new \app\Aggregations( "3", "avg", "metric", true, ["field" => "system.fsstat.total_size.total", "customLabel" => "Test space"] )
                )
            )->setSearch(

                (new \app\Search("0011"))->setSource(

                    (new \app\SearchSource())->setKibanaSavedObjectMeta(

                        (new \app\SearchKibanaSavedObjectMeta(
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
                        ))
                    )
                )->build())
            )->build()
        )
)->addWidget(

    (new visualization\Disk())->setVisualization(

        (new Visualization("0022"))->setVisalizationSource(

            (new \app\VisalizationSource())->addVisState(

                (new \app\VisState())->addAggs(

                    new \app\Aggregations( "4", "avg", "metric", true, ["field" => "system.fsstat.total_size.total", "customLabel" => "AGG AZZ customLabel "] )
                )->addAggs(

                    new \app\Aggregations( "6", "avg", "metric", true, ["field" => "system.fsstat.total_size.total", "customLabel" => "AGG AZZ TEST customLabel "] )
                )
            )->setSearch(

                (new \app\Search("0022"))->setSource(

                    (new \app\SearchSource())->setKibanaSavedObjectMeta(

                        (new \app\SearchKibanaSavedObjectMeta(
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
                        ))
                    )
                )->build())
        )->build()
    )
)->generate();

