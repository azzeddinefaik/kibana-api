<?php

return $cpu = [[
    "_id"     => "Disk space distribution", //variable
    "_type"   => "visualization",
    "_source" => [
        "description"           => "Disk space distribution", //variable
        "kibanaSavedObjectMeta" => [
            "searchSourceJSON" => json_encode([
                "filter" => [],
            ]),
        ],
        "savedSearchId"         => "Filesystem-stats", //variable
        "title"                 => "Disk space distribution", //variable
        "uiStateJSON"           => "{}",
        "version"               => "1",
        "visState"              => json_encode(json_decode(file_get_contents(__DIR__ . "/disk/visulisations/disk-space-distribution.json"))),
    ],
],
    [
        "_id"     => "Disk utilization over time", //variable
        "_type"   => "visualization",
        "_source" => [
            "description"           => " Disk utilization over time", //variable
            "kibanaSavedObjectMeta" => [
                "searchSourceJSON" => json_encode([
                    "filter" => [],
                ]),
            ],
            "savedSearchId"         => "Filesystem-stats", //variable
            "title"                 => "Disk utilization over time", //variable
            "uiStateJSON"           => "{}",
            "version"               => "1",
            "visState"              => json_encode(json_decode(file_get_contents(__DIR__ . "/disk/visulisations/disk-utilization-over-time.json"))),
        ],
    ]];