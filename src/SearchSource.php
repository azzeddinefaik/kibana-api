<?php
namespace app;

/**
 * Class Source
 */
class SearchSource
{
    public $columns;
    public $description;
    public $hits;
    /**
     * @var SearchKibanaSavedObjectMeta
     */
    public $kibanaSavedObjectMeta;

    public $sort ;
    public $title;
    public $version;

    const VERSION = "1";
    const SORT = ["@timestamp", "desc"];
    const COLUMNS = ["_source"];

    /**
     * @param string $title
     * @param string $description
     * @param string $hits
     * @param SearchKibanaSavedObjectMeta $kibanaSavedObjectMeta
     */
    public function __construct($title="default SearchSource",$description="default description for SearchSource",$hits="0", SearchKibanaSavedObjectMeta $kibanaSavedObjectMeta = null ) {

        $this->description = $description;
        $this->kibanaSavedObjectMeta = $kibanaSavedObjectMeta;
        $this->title = $title;
        $this->hits = $hits;
        $this->columns = self::COLUMNS;
        $this->sort = self::SORT;
        $this->version = self::VERSION;
        return $this;
    }

    /**
     * @return array
     */
    public function generate()
    {

        $searchSource = [
            "columns"=> $this->columns,
            "description"=> $this->description,
            "hits"=> $this->hits,
            "kibanaSavedObjectMeta"=> $this->kibanaSavedObjectMeta->generate(),
            "sort"=> $this->sort,
            "title" => $this->title,
            "version" => $this->version
        ];
        return $searchSource;
    }

    /**
     * @param array $columns
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $hits
     * @return $this
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
        return $this;
    }

    /**
     * @param SearchKibanaSavedObjectMeta $kibanaSavedObjectMeta
     * @return $this
     */
    public function setKibanaSavedObjectMeta(SearchKibanaSavedObjectMeta $kibanaSavedObjectMeta)
    {
        $this->kibanaSavedObjectMeta = $kibanaSavedObjectMeta;
        return $this;
    }

    /**
     * @param array $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}