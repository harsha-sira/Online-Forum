<?php

/* @phpbb_boardannouncements/event/overall_header_head_append.html */
class __TwigTemplate_7ee8594a42879e832343e0e15a379a2d9a97b654c04460a2a09ec41622b7ec61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["S_BOARD_ANNOUNCEMENT"]) ? $context["S_BOARD_ANNOUNCEMENT"] : null)) {
            // line 2
            echo "\t";
            $asset_file = "@phpbb_boardannouncements/boardannouncements.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('9');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_boardannouncements/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
