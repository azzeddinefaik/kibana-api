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



    public function generate(){
        return "[azz Source ]";
    }

}