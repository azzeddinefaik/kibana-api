<?php
namespace app;

/**
 * Class Search
 */
class Search
{
    public $id;
    public $type;
    public $state = null;
    /**
     * @var SearchSource
     */
    public $source;

    const TYPE_SEARCH = 'search';
    const BUILT     = '1';
    const PENDING   = '0';

    public function __construct($id = "001", SearchSource $source = null)
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

    /**
     *
     */
    public function build(){
        file_put_contents(__DIR__."/output/".$this->id."-".$this->type.".json",json_encode([$this->generate()]));
        $this->state = self::BUILT;
        return $this;
    }

    /**
     * @param mixed $id
     * @return Search
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $type
     * @return Search
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param null $state
     * @return Search
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param SearchSource $source
     * @return Search
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

}