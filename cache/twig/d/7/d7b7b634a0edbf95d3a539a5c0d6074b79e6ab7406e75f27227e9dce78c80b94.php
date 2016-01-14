<?php

/* board_announcements.html */
class __TwigTemplate_d7b7b634a0edbf95d3a539a5c0d6074b79e6ab7406e75f27227e9dce78c80b94 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "board_announcements.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
\tvar form_name = 'acp_board_announcements';
\tvar text_name = 'board_announcements_text';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;
</script>

<a id=\"maincontent\"></a>

<h1>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_SETTINGS");
        echo "</h1>

<p>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_SETTINGS_EXPLAIN");
        echo "</p>

";
        // line 17
        if ((isset($context["ERRORS"]) ? $context["ERRORS"] : null)) {
            // line 18
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 20
            echo (isset($context["ERRORS"]) ? $context["ERRORS"] : null);
            echo "</p>
\t</div>
";
        }
        // line 23
        echo "
<form id=\"acp_board_announcements\" method=\"post\" action=\"";
        // line 24
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("GENERAL_OPTIONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_enable\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_ENABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_enable\" name=\"board_announcements_enable\" value=\"1\"";
        // line 30
        if ((isset($context["BOARD_ANNOUNCEMENTS_ENABLED"]) ? $context["BOARD_ANNOUNCEMENTS_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_enable\" value=\"0\"";
        // line 31
        if ( !(isset($context["BOARD_ANNOUNCEMENTS_ENABLED"]) ? $context["BOARD_ANNOUNCEMENTS_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_enable\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_GUESTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_guests\" name=\"board_announcements_guests\" value=\"1\"";
        // line 37
        if ((isset($context["BOARD_ANNOUNCEMENTS_GUESTS"]) ? $context["BOARD_ANNOUNCEMENTS_GUESTS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_guests\" value=\"0\"";
        // line 38
        if ( !(isset($context["BOARD_ANNOUNCEMENTS_GUESTS"]) ? $context["BOARD_ANNOUNCEMENTS_GUESTS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_dismiss\">";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_DISMISS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_dismiss\" name=\"board_announcements_dismiss\" value=\"1\"";
        // line 44
        if ((isset($context["BOARD_ANNOUNCEMENTS_DISMISS"]) ? $context["BOARD_ANNOUNCEMENTS_DISMISS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_dismiss\" value=\"0\"";
        // line 45
        if ( !(isset($context["BOARD_ANNOUNCEMENTS_DISMISS"]) ? $context["BOARD_ANNOUNCEMENTS_DISMISS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 50
        if ((isset($context["BOARD_ANNOUNCEMENTS_PREVIEW"]) ? $context["BOARD_ANNOUNCEMENTS_PREVIEW"] : null)) {
            // line 51
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_PREVIEW");
            echo "</legend>
\t\t\t<div style=\"padding:10px; font-size:1.0em; overflow: auto; ";
            // line 53
            if ((isset($context["BOARD_ANNOUNCEMENTS_BGCOLOR"]) ? $context["BOARD_ANNOUNCEMENTS_BGCOLOR"] : null)) {
                echo "background-color:#";
                echo (isset($context["BOARD_ANNOUNCEMENTS_BGCOLOR"]) ? $context["BOARD_ANNOUNCEMENTS_BGCOLOR"] : null);
            }
            echo "\">";
            echo (isset($context["BOARD_ANNOUNCEMENTS_PREVIEW"]) ? $context["BOARD_ANNOUNCEMENTS_PREVIEW"] : null);
            echo "</div>
\t\t</fieldset>
\t";
        }
        // line 56
        echo "
\t<fieldset>
\t\t<legend>";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_TEXT");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_bgcolor\">";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_BGCOLOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("BOARD_ANNOUNCEMENTS_BGCOLOR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<input name=\"board_announcements_bgcolor\" type=\"text\" id=\"board_announcements_bgcolor\" value=\"";
        // line 62
        echo (isset($context["BOARD_ANNOUNCEMENTS_BGCOLOR"]) ? $context["BOARD_ANNOUNCEMENTS_BGCOLOR"] : null);
        echo "\" size=\"6\" maxlength=\"6\" ";
        if ((isset($context["BOARD_ANNOUNCEMENTS_BGCOLOR"]) ? $context["BOARD_ANNOUNCEMENTS_BGCOLOR"] : null)) {
            echo "style=\"border-right:20px solid #";
            echo (isset($context["BOARD_ANNOUNCEMENTS_BGCOLOR"]) ? $context["BOARD_ANNOUNCEMENTS_BGCOLOR"] : null);
            echo "\"";
        }
        echo " />
\t\t\t</dd>
\t\t</dl>

\t\t<br />

\t\t";
        // line 68
        $location = "acp_posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("acp_posting_buttons.html", "board_announcements.html", 68)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 69
        echo "
\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dt>
\t\t\t<dd style=\"margin-";
        // line 72
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px;\">
\t\t\t\t<textarea name=\"board_announcements_text\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
        // line 73
        echo (isset($context["BOARD_ANNOUNCEMENTS_TEXT"]) ? $context["BOARD_ANNOUNCEMENTS_TEXT"] : null);
        echo "</textarea>
\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 75
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 76
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 77
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if ((isset($context["S_BBCODE_DISABLE_CHECKED"]) ? $context["S_BBCODE_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 80
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if ((isset($context["S_SMILIES_DISABLE_CHECKED"]) ? $context["S_SMILIES_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 83
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if ((isset($context["S_MAGIC_URL_DISABLE_CHECKED"]) ? $context["S_MAGIC_URL_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 86
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " </strong>";
        echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
        echo " :: ";
        echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
        echo " :: ";
        echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
        echo " :: ";
        echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
        echo " :: ";
        echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
        echo "</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 91
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" />
\t\t";
        // line 93
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>

";
        // line 97
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "board_announcements.html", 97)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "board_announcements.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 97,  310 => 93,  306 => 92,  302 => 91,  281 => 86,  278 => 85,  268 => 83,  265 => 82,  255 => 80,  252 => 79,  242 => 77,  240 => 76,  236 => 75,  231 => 73,  227 => 72,  222 => 69,  210 => 68,  195 => 62,  187 => 60,  182 => 58,  178 => 56,  167 => 53,  163 => 52,  160 => 51,  158 => 50,  146 => 45,  138 => 44,  132 => 42,  121 => 38,  113 => 37,  107 => 35,  96 => 31,  88 => 30,  82 => 28,  77 => 26,  72 => 24,  69 => 23,  63 => 20,  59 => 19,  56 => 18,  54 => 17,  49 => 15,  44 => 13,  31 => 2,  19 => 1,);
    }
}
