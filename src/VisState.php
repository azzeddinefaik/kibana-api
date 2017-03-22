<?php
namespace app;


class VisState
{
    public $title;
    public $type;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function  generate(){
        $visState = "{TEST HAHA}";
        return $visState;
    }
}