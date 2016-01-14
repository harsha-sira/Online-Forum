<?php

/* @kinerity_bestanswer/event/viewtopic_body_postrow_custom_fields_before.html */
class __TwigTemplate_c5be0ef2c6af0fc8535307ffa02524a17a8a9af67454d0fcb56d9b4ec229ab32 extends Twig_Template
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
        if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "TOPICS_ANSWERED", array())) {
            echo "<dd class=\"profile-posts\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("TOPICS_ANSWERED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> <a href=\"";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_TOPICS_ANSWERED", array());
            echo "\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "TOPICS_ANSWERED", array());
            echo "</a></dd>";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/viewtopic_body_postrow_custom_fields_before.html";
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
