<?php

/* @kinerity_bestanswer/event/acp_forums_normal_settings_append.html */
class __TwigTemplate_1050a5fd284a1854f43bccad50a5139e40059d74f28b505b60b33537fbb51224 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"bestanswer_enabled\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("ENABLE_BESTANSWER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ENABLE_BESTANSWER_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"bestanswer_enabled\" value=\"1\"";
        // line 3
        if (((isset($context["S_BESTANSWER_ENABLED"]) ? $context["S_BESTANSWER_ENABLED"] : null) == 1)) {
            echo " id=\"bestanswer_enabled\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"bestanswer_enabled\" value=\"0\"";
        // line 4
        if ( !(isset($context["S_BESTANSWER_ENABLED"]) ? $context["S_BESTANSWER_ENABLED"] : null)) {
            echo " id=\"bestanswer_enabled\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/acp_forums_normal_settings_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  29 => 3,  22 => 2,  19 => 1,);
    }
}
