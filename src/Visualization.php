<?php
namespace app;

/**
 * Class Visualization
 */
class Visualization
{
    public $id;
    public $type;

    /**
     * @var VisalizationSource
     */
    public $source;

    const TYPE_VISUALIZATION= 'visualization';

    public function __construct($id, VisalizationSource $source)
    {
        $this->id     = $id;
        $this->type   = self::TYPE_VISUALIZATION;
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