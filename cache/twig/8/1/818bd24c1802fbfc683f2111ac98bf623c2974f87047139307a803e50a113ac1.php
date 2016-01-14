<?php

/* @kinerity_bestanswer/event/viewtopic_body_post_buttons_before.html */
class __TwigTemplate_818bd24c1802fbfc683f2111ac98bf623c2974f87047139307a803e50a113ac1 extends Twig_Template
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
        if (( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_POST", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_AUTH", array()))) {
            // line 2
            echo "<li>
\t";
            // line 3
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ANSWER", array())) {
                // line 4
                echo "\t<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_UNMARK_ANSWER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ANSWER");
                echo "\" class=\"unmark-answer-button icon-unmark-answer-button\"><span>&#10007; ";
                echo $this->env->getExtension('phpbb')->lang("BUTTON_UNMARK_ANSWER");
                echo "</span></a>
\t";
            } else {
                // line 6
                echo "\t<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MARK_ANSWER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_ANSWER");
                echo "\" class=\"button icon-mark-answer-button\"><span>&#10003; ";
                echo $this->env->getExtension('phpbb')->lang("BUTTON_MARK_ANSWER");
                echo "</span></a>
\t";
            }
            // line 8
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/viewtopic_body_post_buttons_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  36 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
