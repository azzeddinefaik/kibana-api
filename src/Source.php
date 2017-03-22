<?php
namespace app;

/**
 * Class Source
 */
class Source
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
     * @return $this
     */
    public function construct($title,$description,$hits, SearchKibanaSavedObjectMeta $kibanaSavedObjectMeta){

        $this->description = $description;
        $this->kibanaSavedObjectMeta = $kibanaSavedObjectMeta;
        $this->title = $title;
        $this->hits = $hits;

        $this->columns = self::COLUMNS;
        $this->sort = self::SORT;
        $this->version = self::VERSION;

        return $this;
    }

    public function generate(){
        return "[azz Source ]";
    }

}