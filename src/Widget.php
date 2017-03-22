<?php
namespace app;

/**
 * Class Widget
 */
class Widget
{
    /**
     * @var Visualization
     */
    public $visualization;
    public $panelIndex;
    public $col;
    public $row;
    public $sizeX;
    public $sizeY;
    public $type;

    const TYPE_WIDGET_VIS = "visualization";

    public function __construct(Visualization $visualization, $panelIndex, $col = "1", $row = "1", $sizeX = "12", $sizeY = "20")
    {
        $this->visualization = $visualization;
        $this->panelIndex      = $panelIndex;
        $this->col             = $col;
        $this->row             = $row;
        $this->sizeX           = $sizeX;
        $this->sizeY           = $sizeY;
        $this->type            = self::TYPE_WIDGET_VIS;
    }

    public function generate()
    {
        $widget = [
            "col"        => $this->col,
            "id"         => $this->visualization->id,
            "panelIndex" => $this->panelIndex,
            "row"        => $this->row,
            "size_x"     => $this->sizeX,
            "size_y"     => $this->sizeY,
            "type"       => $this->type,
        ];

        return $widget;
    }
}