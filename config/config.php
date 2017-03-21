<?php

return [
    "_id"      => "Apache-HTTPD-CPU",
    "_type"    => "visualization",
    "_source"  => [
        "description"           => " visualisation of CPU",
        "kibanaSavedObjectMeta" =>  [
            "searchSourceJSON" =>json_encode( [
                "filter" => [],
            ]),
        ] ,
        "savedSearchId"         => "Apache-HTTPD",
        "title"    => "Apache HTTPD - CPU",
        "uiStateJSON" => "{}",
        "version"  => "1",
        "visState" => json_encode( json_decode( file_get_contents( "config/visState.json" ) ) )
    ],
];