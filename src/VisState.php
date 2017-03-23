<?php
namespace app;


class VisState
{
    public $title;
    public $type;
    /**
     * @var [] Aggregations
     */
    public $aggs;

    const VISSTATE_TYPE = "metric";

    /**
     * VisState constructor.
     * @param $title
     * @param Aggregations $aggs
     */
    public function __construct($title = "VisState title", Aggregations $aggs = null)
    {
        $this->title = $title;
        $this->type  = self::VISSTATE_TYPE;
        $this->aggs [] = $aggs;
    }


    /**
     * @param Aggregations $aggs
     * @return $this
     */
    public function addAggs( Aggregations $aggs){
        $this->aggs [] = $aggs;
        return $this;
    }

    /**
     * @return array
     */
    public function generate()
    {
//        $aggs = [];
//        foreach ($this->aggs as $a)
//        {
//            $aggs [] =  $a->generate();
//        }

        $visState = [

            "title"  => $this->title,
            "type"   => $this->type,
            "params" => [
                "handleNoResults" => true,
                "fontSize"        => "30",
            ],
            "aggs"   => $this->aggs,
        ];

        return $visState;
    }

    /**
     * @param string $type
     */
    public function setType( $type = self::VISSTATE_TYPE )
    {
        $this->type = $type;
    }
}