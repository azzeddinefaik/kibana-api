<?php

return [
    "_id"      => "Apache-HTTPD-CPU",
    "_type"    => "visualization",
    "_source"  => [
        "title"    => "Apache HTTPD - CPU",
        "savedSearchId"         => "Apache-HTTPD",
        "version"  => "1",
        "description"           => " visualisation of CPU",
        "kibanaSavedObjectMeta" =>  [
            "searchSourceJSON" =>json_encode( [
                "filter" => [],
            ]),
        ] ,
        "uiStateJSON" => "{}",
        "visState" => json_encode( json_decode( file_get_contents( "config/visState.json" ) ) )
    ],
];