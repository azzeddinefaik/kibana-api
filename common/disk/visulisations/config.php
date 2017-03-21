<?php

return [
    "_id"     => "$_visId",
    "_type"   => "visualization",
    "_source" => [
        "description"           => "$_visId",
        "kibanaSavedObjectMeta" => [
            "searchSourceJSON" => json_encode([
                "filter" => [],
            ]),
        ],
        "savedSearchId"         => "$_id",
        "title"                 => "Disk space overview $_visId",
        "uiStateJSON"           => "{}",
        "version"               => "1",
        "visState"              => json_encode(json_decode(file_get_contents(__DIR__ . "/templates/disk-overview-vis.json"))),
    ],
];