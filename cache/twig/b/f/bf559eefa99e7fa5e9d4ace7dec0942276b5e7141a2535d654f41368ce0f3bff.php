<?php

/* @kinerity_bestanswer/event/viewtopic_topic_title_append.html */
class __TwigTemplate_bf559eefa99e7fa5e9d4ace7dec0942276b5e7141a2535d654f41368ce0f3bff extends Twig_Template
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
        if ((isset($context["S_ANSWERED"]) ? $context["S_ANSWERED"] : null)) {
            // line 2
            echo "&nbsp;<span class=\"btn btn-answer\">&#10003; ";
            echo $this->env->getExtension('phpbb')->lang("ANSWERED");
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/viewtopic_topic_title_append.html";
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
