<?php

/* @kinerity_bestanswer/event/viewtopic_body_postrow_post_notices_before.html */
class __TwigTemplate_54ddf688091ca115e9d41eb18d43dd76d20d1cd9f1155f8d07748be79791d958 extends Twig_Template
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
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_POST", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ANSWERED", array()))) {
            // line 2
            echo "<br />
<div class=\"content answer\"><span class=\"btn btn-answer\">";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("BEST_ANSWER");
            echo "</span> ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "ANSWER_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "ANSWER_DATE", array());
            echo "<hr />
";
            // line 4
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "ANSWER", array());
            echo "
<hr /><a href=\"";
            // line 5
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_ANSWER", array());
            echo "\" class=\"btn btn-post\">";
            echo $this->env->getExtension('phpbb')->lang("FULL_POST");
            echo " &#10137;</a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/viewtopic_body_postrow_post_notices_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
