<?php
namespace app;


class VisalizationSource extends Source
{
    public $savedSearchId;
    /**
     * @var VisState
     */
    public  $visState;

    public function __construct($savedSearchId,VisState $visState)
    {
        $this->savedSearchId = $savedSearchId;
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
            "savedSearchId"                  => $this->savedSearchId,
            "title"                 => $this->title,
            "uiStateJSON" => "{}",
            "version"               => $this->version,
            "visState"              => $this->visState->generate()
        ];

        return $visualizationSource;
    }

}