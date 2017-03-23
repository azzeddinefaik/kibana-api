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

    public function __construct(Visualization $visualization = null ,$panelIndex = "0", $col = "1", $row = "1", $sizeX = "12", $sizeY = "20")
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

    /**
     * @param Visualization $visualization
     */
    public function setVisualization($visualization)
    {
        $this->visualization = $visualization;
    }

    /**
     * @param string $panelIndex
     */
    public function setPanelIndex($panelIndex)
    {
        $this->panelIndex = $panelIndex;
    }

    /**
     * @param string $col
     */
    public function setCol($col)
    {
        $this->col = $col;
    }

    /**
     * @param string $row
     */
    public function setRow($row)
    {
        $this->row = $row;
    }

    /**
     * @param string $sizeX
     */
    public function setSizeX($sizeX)
    {
        $this->sizeX = $sizeX;
    }

    /**
     * @param string $sizeY
     */
    public function setSizeY($sizeY)
    {
        $this->sizeY = $sizeY;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}