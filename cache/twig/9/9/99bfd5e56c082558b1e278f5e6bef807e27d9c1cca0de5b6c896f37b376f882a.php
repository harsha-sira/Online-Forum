<?php

/* @kinerity_bestanswer/event/topiclist_row_prepend.html */
class __TwigTemplate_99bfd5e56c082558b1e278f5e6bef807e27d9c1cca0de5b6c896f37b376f882a extends Twig_Template
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
        if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "search")) {
            // line 2
            echo "\t";
            if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_ANSWERED", array())) {
                // line 3
                echo "\t<span class=\"btn btn-answer\">&#10003; ";
                echo $this->env->getExtension('phpbb')->lang("ANSWERED");
                echo "</span>
\t";
            }
        } else {
            // line 6
            echo "\t";
            if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_ANSWERED", array())) {
                // line 7
                echo "\t<span class=\"btn btn-answer\">&#10003; ";
                echo $this->env->getExtension('phpbb')->lang("ANSWERED");
                echo "</span>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/topiclist_row_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  31 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
