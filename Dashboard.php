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
        $dashboard = [
            "_id"     => "Disk Test Dashboard",
            "_type"   => "dashboard",
            "_source" => [
                "description"           => " Test Dashboard",
                "hits"                  => "0",
                "kibanaSavedObjectMeta" => [

                    "searchSourceJSON" => "{\"filter\":[{\"query\":{\"query_string\":{\"analyze_wildcard\":true,\"query\":\"*\"}}}]}",
                ],
                "optionJSON"            => [
                    "darkTheme" => false,
                ],
                "panelsJSON"            => json_encode(json_decode(file_get_contents( __DIR__ . "/templates/board.json" ))),
                "timeRestore"           => false,
                "title"                 => "Disk Test Dashboard",
                "uiStateJSON"           => "{\"P-1\":{\"vis\":{\"params\":{\"sort\":{\"columnIndex\":null,\"direction\":null}}}}}",
                "version"               => "1",
            ]
        ];
        return $dashboard;
    }

}