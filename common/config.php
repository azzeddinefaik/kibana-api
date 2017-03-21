<?php

return $cpu = [[
    "_id"     => "Apache-ANMOL-CPU",
    "_type"   => "visualization",
    "_source" => [
        "description"           => " visualisation of ANMOL CPU",
        "kibanaSavedObjectMeta" => [
            "searchSourceJSON" => json_encode([
                "filter" => [],
            ]),
        ],
        "savedSearchId"         => "Fsstats",
        "title"                 => "Disk space ANMOL overview",
        "uiStateJSON"           => "{}",
        "version"               => "1",
        "visState"              => json_encode(json_decode(file_get_contents(__DIR__ ."/disk/visulisations/disk-space-distribution.json"))),
    ],
],
    [
        "_id"     => "Apache-ANMOL-CPU",
        "_type"   => "visualization",
        "_source" => [
            "description"           => " visualisation of ANMOL CPU",
            "kibanaSavedObjectMeta" => [
                "searchSourceJSON" => json_encode([
                    "filter" => [],
                ]),
            ],
            "savedSearchId"         => "Fsstats",
            "title"                 => "Disk space ANMOL overview",
            "uiStateJSON"           => "{}",
            "version"               => "1",
            "visState"              => json_encode(json_decode(file_get_contents(__DIR__."/disk/visulisations/disk-utilization-over-time.json"))),
        ],
    ]];