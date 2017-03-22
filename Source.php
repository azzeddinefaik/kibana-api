<?php

/**
 * Class Source
 */
class Source
{
    public $title;
    public $description;
    public $savedSearchId;
    public $kibanaSavedObjectMeta;
    public $version;
    public $visState;

    const VERSION="1";

    /**
     * @return $this
     */
    public function construct(){

        return $this;
    }



}