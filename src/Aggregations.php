<?php
namespace app;


class Aggregations
{
    public $id;
    public $isEnabled;
    public $type;
    public $schema;
    public $params;

    public function __construct($id, $type, $schema, $isEnabled = true, $params = [])
    {
        $this->id        = $id;
        $this->isEnabled = $isEnabled;
        $this->type      = $type;
        $this->schema    = $schema;
        $this->params    = $params;

    }

    public function generate()
    {
        $aggs = [
            "id"      => $this->id,
            "enabled" => $this->isEnabled,
            "type"    => $this->type,
            "schema"  => $this->schema,
            "params"  => $this->params,
        ];

        return $aggs;
    }


}