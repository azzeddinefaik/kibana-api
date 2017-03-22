<?php

/**
 * Class Dashboard
 */
class Dashboard
{
    public $id;
    public $typ;
    public $title;
    public $description;

    /** @var  Widget[] */
    public $widgets;
    public $source;

    const TYPE_DASHBOARD = 'dashboard';


    /**
     * @param \Widget $widget
     *
     * @return $this
     */
    public function addWidget(Widget $widget)
    {
        $this->widgets[] = $widget;

        return $this;
    }

    /**
     *
     */
    public function generate()
    {

//        $content = '';
//        foreach ($this->widgets as $widget) {
//
//            $content .= $widget->title;
//        }

        foreach ($this->widgets as $widget) {

            $widget->generate();
        }
    }

}