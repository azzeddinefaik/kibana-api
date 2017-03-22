<?php

/**
 * Class Search
 */
class Search
{
    public $id;
    public $type;
    /**
     * @var SearchSource
     */
    public $source;

    const TYPE_SEARCH = 'search';

    public function __construct($id, SearchSource $source)
    {
        $this->id     = $id;
        $this->type   = self::TYPE_SEARCH;
        $this->source = $source;

        return $this;
    }

    public function generate()
    {
        $search = [
            "_id"=> $this->id,
            "_type"=> $this->type,
            "_source"=> $this->source->generate(),
        ];

        return $search;
    }
}