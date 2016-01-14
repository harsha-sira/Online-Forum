<?php

/* @kinerity_bestanswer/event/forumlist_body_last_post_title_prepend.html */
class __TwigTemplate_2ccb51d27cb1b87e2da5e84feb68af372f298f7025239f1c2dfcf07037d0cbdb extends Twig_Template
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
        if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_ANSWERED", array())) {
            echo "<span style=\"color: #00AA00; font-weight: bold;\">&#10003;</span>";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/forumlist_body_last_post_title_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
