<?php
namespace app;
/**
 * Class Dashboard
 */
class Dashboard
{
    public $id;
    public $type;
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
        $this->widgets[] = $widget->generate();

        return $this;
    }

    /**
     *
     */
    public function generate()
    {
        $dashboard = [
            "_id"     => "Azz Test Dashboard",
            "_type"   => "dashboard",
            "_source" => [
                "description"           => " Azz Dashboard",
                "hits"                  => "0",
                "kibanaSavedObjectMeta" => [

                    "searchSourceJSON" => "{\"filter\":[{\"query\":{\"query_string\":{\"analyze_wildcard\":true,\"query\":\"*\"}}}]}",
                ],
                "optionJSON"            => [
                    "darkTheme" => false,
                ],
                "panelsJSON"            => json_encode($this->widgets),
                "timeRestore"           => false,
                "title"                 => "Azz Disk Test Dashboard",
                "uiStateJSON"           => "{\"P-1\":{\"vis\":{\"params\":{\"sort\":{\"columnIndex\":null,\"direction\":null}}}}}",
                "version"               => "1",
            ]
        ];
        file_put_contents(__DIR__."/output/azz-dashboard.json",json_encode($dashboard));
        return $dashboard;
    }

}