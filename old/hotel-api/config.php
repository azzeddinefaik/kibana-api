<?php

return [
    "_id"      => "HOTEL-API-CPU",
    "_type"    => "visualization",
    "_source"  => [
        "description"           => " visualisation of disk",
        "kibanaSavedObjectMeta" =>  [
            "searchSourceJSON" =>json_encode( [
                "filter" => [],
            ]),
        ] ,
        "savedSearchId"         => "Fsstats",
        "title"    => "Hotel api disk space overview",
        "uiStateJSON" => "{}",
        "version"  => "1",
        "visState" => json_encode( json_decode( file_get_contents( __DIR__."/disk/visState.json" ) ) )
    ],
];