<?php

/**
 * Class Source
 */
class SearchSource extends Source
{


    public function generate()
    {
        $searchSource = [
            "columns"=> $this->columns,
            "description"=> $this->description,
            "hits"=> $this->hits,
            "kibanaSavedObjectMeta"=> $this->kibanaSavedObjectMeta,
            "sort"=> $this->sort,
            "title" => $this->title,
            "version" => $this->version
        ];
        return $searchSource;
    }
}