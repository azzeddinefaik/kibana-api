<?php

$title = "fsstat";
$_id = "fsstat";

return [
  "_id"=> "$_id",
    "_type"=> "search",
    "_source"=> [
      "columns"=> [
          "_source"
      ],
      "description"=> "",
      "hits"=> 0,
      "kibanaSavedObjectMeta"=> [
          "searchSourceJSON"=> json_encode( json_decode( file_get_contents( __DIR__. "/" . $_id . "-search-source.json" ) ) )
      ],
      "sort"=> [
          "@timestamp",
          "desc"
      ],
      "title" => "$title",
      "version" => 1
    ]
];