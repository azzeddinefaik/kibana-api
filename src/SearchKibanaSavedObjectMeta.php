<?php
namespace app;

/**
 * Class KibanaSavedObjectMeta
 */
class SearchKibanaSavedObjectMeta
{
    public $index;
    public $filter;
    public $query;
    public $highlight;

    const FILTER = [];
    public function __construct($index,$highlight,$filter,$query)
    {
        $this->index = $index;
        $this->filter = $filter;
        $this->query = $query;
        $this->highlight = $highlight;
    }

    public function  generate(){
        $searchKibanaObject = [
            "index"     => $this->index,
            "highlight" => [
                "pre_tags"            => [
                    "@kibana - highlighted - field@",
                ],
                "post_tags"           => [
                    "@/kibana - highlighted - field@",
                ],
                "fields"              => [
                    " * " => [],
                ],
                "require_field_match" => false,
                "fragment_size"       => 2147483647,
            ],
            "query"     => [
                "query_string" => [
                    "query"            =>  $this->query,
                    "analyze_wildcard" => true,
                ],
            ]
        ];

        return $searchKibanaObject;
    }
}