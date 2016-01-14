<?php

/* @paybas_quicklogin/quick_login.html */
class __TwigTemplate_70111a5afc3bf2b9ce4cad91a02cd072b65579ffc7985778b764f5f81181957b extends Twig_Template
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
        echo "<div id=\"quick-login-bg\" class=\"quick-login-bg\"></div>

<form method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\">
<div class=\"panel\" id=\"quick-login-panel\">
\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<a href=\"#\" class=\"close\"></a>
\t\t\t<h3><a href=\"";
        // line 8
        echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
        echo "</a>";
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null))) {
            echo "&nbsp; &bull; &nbsp;<a href=\"";
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a>";
        }
        echo "</h3>

\t\t\t<fieldset>
\t\t\t\t<dl class=\"ql-username\">
\t\t\t\t\t<dt><label for=\"ql-username\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t<dd class=\"input-container\"><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"ql-username\" size=\"25\" value=\"";
        // line 13
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"ql-password\">
\t\t\t\t\t<dt><label for=\"ql-password\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t<dd class=\"input-container\"><input type=\"password\" tabindex=\"2\" id=\"ql-password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t\t";
        // line 18
        if ((isset($context["U_SEND_PASSWORD_EXT"]) ? $context["U_SEND_PASSWORD_EXT"] : null)) {
            echo "<dd class=\"input-link\"><a href=\"";
            echo (isset($context["U_SEND_PASSWORD_EXT"]) ? $context["U_SEND_PASSWORD_EXT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
            echo "</a></dd>";
        }
        // line 19
        echo "\t\t\t\t</dl>
\t\t\t\t";
        // line 20
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 21
            echo "\t\t\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 22
            echo "\t\t\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "@paybas_quicklogin/quick_login.html", 22)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 23
            echo "\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</fieldset>

\t\t\t<fieldset class=\"ql-options\">
\t\t\t\t";
        // line 27
        if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
            echo "<label for=\"ql-autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"ql-autologin\" tabindex=\"4\" /><span>";
            echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
            echo "</span></label><br />";
        }
        // line 28
        echo "\t\t\t\t<label for=\"ql-viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"ql-viewonline\" tabindex=\"5\" /><span>";
        echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
        echo "</span></label>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"button1\" />
\t\t\t\t";
        // line 33
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t</fieldset>

\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "ql_oauth", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 37
            echo "\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "<hr /><p class=\"ql-oauth\">";
            }
            // line 38
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["mode"], "REDIRECT_URL", array());
            echo "\">";
            echo $this->getAttribute($context["mode"], "SERVICE_NAME", array());
            echo "</a>
\t\t\t\t";
            // line 39
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "</p>";
            } else {
                echo "&nbsp;&bull;&nbsp;";
            }
            // line 40
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t</div>
\t</div>
</div>
</form>

<script>
(function(\$) {
\t\$(document).ready(function() {
\t\tvar \$button = \$('.icon-logout a'),
\t\t\tql_bg = '#quick-login-bg',
\t\t\tql_pnl = '#quick-login-panel',
\t\t\tpS_bg = '#darkenwrapper';

\t\tif (\$(pS_bg).length) {
\t\t\tql_bg = pS_bg;
\t\t}

\t\t\$button.click(function(e){
\t\t\te.preventDefault();
\t\t\t\$(ql_bg + ', ' + ql_pnl).fadeIn(300);
\t\t});
\t\t\$(ql_bg + ', #quick-login-panel .close').click(function () {
\t\t\t\$(ql_bg + ', ' + ql_pnl).fadeOut(300);
\t\t})
\t});
})(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "@paybas_quicklogin/quick_login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 41,  163 => 40,  157 => 39,  150 => 38,  145 => 37,  128 => 36,  121 => 33,  117 => 32,  109 => 28,  103 => 27,  98 => 24,  95 => 23,  82 => 22,  78 => 21,  76 => 20,  73 => 19,  65 => 18,  59 => 16,  53 => 13,  48 => 12,  31 => 8,  23 => 3,  19 => 1,);
    }
}
