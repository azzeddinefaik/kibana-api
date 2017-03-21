<?php

return [
    "_id"      => "Apache-CPU",
    "_type"    => "visualization",
    "_source"  => [
        "description"           => " visualisation of CPU",
        "kibanaSavedObjectMeta" =>  [
            "searchSourceJSON" =>json_encode( [
                "filter" => [],
            ]),
        ] ,
        "savedSearchId"         => "Fsstats",
        "title"    => "Disk space overview",
        "uiStateJSON" => "{}",
        "version"  => "1",
        "visState" => json_encode( json_decode( file_get_contents( "config/disk/disk-overview-vis.json" ) ) )
    ],
];