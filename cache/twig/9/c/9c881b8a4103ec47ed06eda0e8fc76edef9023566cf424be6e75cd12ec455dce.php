<?php

/* @kinerity_bestanswer/event/viewtopic_body_postrow_post_after.html */
class __TwigTemplate_9c881b8a4103ec47ed06eda0e8fc76edef9023566cf424be6e75cd12ec455dce extends Twig_Template
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
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array()) == $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "ANSWER_POST_ID", array()))) {
            // line 2
            echo "<script>
document.getElementById(\"p";
            // line 3
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "ANSWER_POST_ID", array());
            echo "\").style.background = \"#EAF8E2\";
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/viewtopic_body_postrow_post_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
