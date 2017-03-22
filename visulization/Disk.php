<?php

class Disk extends Visualization
{
    /**
     * Disk constructor.
     */
    function __construct()
    {
        $this->source = [
            "description"           => "1xx",
            "kibanaSavedObjectMeta" => [
                "searchSourceJSON" => json_encode([
                    "filter" => [],
                ]),
            ],
            "savedSearchId"         => "xx",
            "title"                 => "Disk space overview xx",
            "uiStateJSON"           => "{}",
            "version"               => "1",
            "visState"              => [],
        ];
    }
}