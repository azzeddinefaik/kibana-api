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

    public function __construct(Search $savedSearch =null,VisState $visState = null)
    {
        $this->savedSearch = $savedSearch;

        $this->visState[] = $visState->generate();
    }

    /**
     * @param VisState $visState
     *
     * @return $this
     */
    public function addVisState(VisState $visState)
    {
        $this->visState[] = $visState->generate();

        return $this;
    }

    /**
     * @param Search $savedSearch
     *
     * @return $this
     */
    public function setSearch(Search $savedSearch)
    {
        $this->savedSearch = $savedSearch;

        return $this;
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
            "visState"              => json_encode($this->visState)
        ];

        return $visualizationSource;
    }

}