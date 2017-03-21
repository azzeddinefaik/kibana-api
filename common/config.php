<?php

return $cpu = [[
    "_id"     => "Disk space distribution",
    "_type"   => "visualization",
    "_source" => [
        "description"           => "Disk space distribution",
        "kibanaSavedObjectMeta" => [
            "searchSourceJSON" => json_encode([
                "filter" => [],
            ]),
        ],
        "savedSearchId"         => "Filesystem-stats",
        "title"                 => "Disk space distribution",
        "uiStateJSON"           => "{}",
        "version"               => "1",
        "visState"              => json_encode(json_decode(file_get_contents(__DIR__ ."/disk/visulisations/disk-space-distribution.json"))),
    ],
],
    [
        "_id"     => "Disk utilization over time",
        "_type"   => "visualization",
        "_source" => [
            "description"           => " Disk utilization over time",
            "kibanaSavedObjectMeta" => [
                "searchSourceJSON" => json_encode([
                    "filter" => [],
                ]),
            ],
            "savedSearchId"         => "Filesystem-stats",
            "title"                 => "Disk utilization over time",
            "uiStateJSON"           => "{}",
            "version"               => "1",
            "visState"              => json_encode(json_decode(file_get_contents(__DIR__."/disk/visulisations/disk-utilization-over-time.json"))),
        ],
    ]];