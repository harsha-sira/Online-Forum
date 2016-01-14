<?php

/* @dmzx_filedownload/event/attachment_file_prepend.html */
class __TwigTemplate_994e842383b8fc0f0e66a976279f03c28c4e04b82482bb2e4920772147bfe8cc extends Twig_Template
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
        if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_IMAGE", array())) {
            // line 2
            echo "\t<dl class=\"files\">
\t\t<dt class=\"attach-image\"><img src=\"";
            // line 3
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_INLINE_LINK", array());
            echo "\" class=\"postimage\" alt=\"";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME", array());
            echo "\" onclick=\"viewableArea(this);\" /></dt>
\t\t";
            // line 4
            if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT", array())) {
                echo "<dd><em>";
                echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT", array());
                echo "</em></dd>";
            }
            // line 5
            echo "\t\t<dd>";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME", array());
            echo " (";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "FILESIZE", array());
            echo " ";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "SIZE_LANG", array());
            echo ") ";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "L_DOWNLOAD_COUNT", array());
            echo "</dd>
\t</dl>
";
        }
        // line 8
        if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "S_FILE", array())) {
            // line 9
            echo "\t<div class=\"download-blocks\">
\t\t<dl class=\"extra-box download orange\">
\t\t\t<dt><a\thref=\"";
            // line 11
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "U_DOWNLOAD_LINK", array());
            echo "\">";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "DOWNLOAD_NAME", array());
            echo "</a></dt>
\t\t\t";
            // line 12
            if ($this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT", array())) {
                echo "<dd><em>";
                echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "COMMENT", array());
                echo "</em></dd>";
            }
            // line 13
            echo "\t\t\t<dd>(";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "FILESIZE", array());
            echo " ";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "SIZE_LANG", array());
            echo ") ";
            echo $this->getAttribute((isset($context["_file"]) ? $context["_file"] : null), "L_DOWNLOAD_COUNT", array());
            echo "</dd>
\t\t</dl>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_filedownload/event/attachment_file_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  61 => 12,  55 => 11,  51 => 9,  49 => 8,  36 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
