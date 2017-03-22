<?php

class VisState
{
    public $title;
    public $type;

    public function __construct($title,$type)
    {
        $this->title = $title;
        $this->type = $type;
    }

    public function  generate(){
        $visState = "{}";
        return $visState;
    }
}