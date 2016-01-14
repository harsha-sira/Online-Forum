<?php

/* @kinerity_bestanswer/event/topiclist_row_prepend.html */
class __TwigTemplate_e38d69cc0f7eaf420ba09908d1cde7c788e11f0e877b6a46f7946885477c2b14 extends Twig_Template
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
