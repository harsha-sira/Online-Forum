<?php

/* @dmzx_filedownload/event/overall_header_head_append.html */
class __TwigTemplate_6eb80e213c818300b0e18f92a11e0f2a983805c0f0ae7ce6b1c8a1b2a3f93d6e extends Twig_Template
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
        $asset_file = "@dmzx_filedownload/filedownload.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
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

    public function getTemplateName()
    {
        return "@dmzx_filedownload/event/overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
