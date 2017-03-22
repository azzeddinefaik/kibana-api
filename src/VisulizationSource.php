<?php
namespace app;


class VisalizationSource extends Source
{
    /**
     * @var Search
     */
    public $savedSearch;
    /**
     * @var VisState
     */
    public  $visState;

    public function __construct($savedSearch,VisState $visState)
    {
        $this->savedSearch = $savedSearch;

        $this->visState = $visState;
    }

    public function generate()
    {
        $visualizationSource = [
            "columns"               => $this->columns,
            "description"           => $this->description,
            "hits"                  => $this->hits,
            "kibanaSavedObjectMeta" => [
                "searchSourceJSON" => json_encode( [
                    "filter" => [],
                ] ),
            ],
            "savedSearchId"                  => $this->savedSearch->id,
            "title"                 => $this->title,
            "uiStateJSON" => "{}",
            "version"               => $this->version,
            "visState"              => json_encode($this->visState->generate())
        ];

        return $visualizationSource;
    }

}