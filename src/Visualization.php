<?php
namespace app;

/**
 * Class Visualization
 */
class Visualization
{
    public $id;
    public $type;
    public $state  = null;
    /**
     * @var VisalizationSource
     */
    public $source;

    const TYPE_VISUALIZATION= 'visualization';
    const BUILT     = '1';
    const PENDING   = '0';

    /**
     * Visualization constructor.
     * @param $id
     * @param VisalizationSource $source
     */
    public function __construct($id = "01", VisalizationSource $source = null)
    {
        $this->id     = $id;
        $this->type   = self::TYPE_VISUALIZATION;
        $this->source = $source;

        return $this;
    }

    /**
     * @param VisalizationSource $source
     * @return $this
     */
    public function setVisalizationSource(VisalizationSource $source){
        if(isset($source))
            $this->source = $source;
        return $this;
    }

    /**
     * @return array
     */
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
     * @return $this
     */
    public function build(){
        file_put_contents(__DIR__."/output/".$this->id."-".$this->type.".json",json_encode([$this->generate()]));
        $this->state = self::BUILT;
        return $this;
    }
}