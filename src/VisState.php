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

    public function __construct($title, Aggregations $aggs)
    {
        $this->title = $title;
        $this->type  = self::VISSTATE_TYPE;
        $this->aggs = $aggs;
    }

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
}