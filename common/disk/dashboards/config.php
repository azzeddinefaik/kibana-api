<?php

return [
    "_id"     => "Metricbeat-filesystem-per-Host",
    "_type"   => "dashboard",
    "_source" => [
        "description"           => " Test Dashboard",
        "hits"                  => "0",
        "kibanaSavedObjectMeta" => [

            "searchSourceJSON" => "{\"filter\":[{\"query\":{\"query_string\":{\"analyze_wildcard\":true,\"query\":\"*\"}}}]}",
        ],
        "optionJSON"            => [
            "darkTheme" => false,
        ],
        "panelsJSON"            => json_encode(json_decode(file_get_contents( __DIR__ . "/templates/board.json" ))),
        "timeRestore"           => false,
        "title"                 => "Metricbeat filesystem per Host",
        "uiStateJSON"           => "{\"P-1\":{\"vis\":{\"params\":{\"sort\":{\"columnIndex\":null,\"direction\":null}}}}}",
        "version"               => "1",
    ]
];