<?php

return $c = [
    "_id" => "Apache-HTTPD-CPU",
    "_type" => "visualization",
    "version" => "1",
    "title" => "Apache HTTPD - CPU",
    "description" => " visualisation of CPU",
    "savedSearchId" => "Apache-HTTPD",
    "kibanaSavedObjectMeta" => [
            "searchSourceJSON" => [
                "filter" => []
            ]
    ],
    "visState" => json_encode(json_decode(file_get_contents("config/visState.json")))
];