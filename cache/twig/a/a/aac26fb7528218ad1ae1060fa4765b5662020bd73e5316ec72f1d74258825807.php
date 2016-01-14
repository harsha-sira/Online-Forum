<?php

/* @vse_passwordstrength/password_strength.html */
class __TwigTemplate_aac26fb7528218ad1ae1060fa4765b5662020bd73e5316ec72f1d74258825807 extends Twig_Template
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
        echo "<script>
/**
* Password Strength
* Inspired by Naked Password/Platform45 at http://www.nakedpassword.com
*/
(function(\$) { // Avoid conflicts with other libraries

'use strict';

\$.fn.passwordStrength = function() {
\treturn this.each(function() {
\t\tvar inputField = \$(this),
\t\t\tresponseArr = [];
\t\tresponseArr[0] = [inputField.css('background-color'), '']; // 0 defaults
\t\tresponseArr[1] = ['#f5a9a9', '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("PS_VERY_WEAK"));
        echo "'];         // 1 red, very weak
\t\tresponseArr[2] = ['#f5a9a9', '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("PS_VERY_WEAK"));
        echo "'];         // 2 red, very weak
\t\tresponseArr[3] = ['#f5d0a9', '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("PS_WEAK"));
        echo "'];              // 3 orange, weak
\t\tresponseArr[4] = ['#f3f781', '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("PS_GOOD"));
        echo "'];              // 4 yellow, good
\t\tresponseArr[5] = ['#a9f5a9', '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("PS_STRONG"));
        echo "'];            // 5 light green, strong
\t\tresponseArr[6] = ['#00ff00', '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("PS_VERY_STRONG"));
        echo "'];       // 6 green, very strong

\t\tfunction trigger() {
\t\t\tvar passwordScore = getPasswordStrength(inputField.val());
\t\t\tshowStrength(inputField, passwordScore);
\t\t}

\t\tfunction showStrength(field, score) {
\t\t\t// Set the correct background color and text indicator for the current score
\t\t\tfield.css('background-color',responseArr[score][0]);
\t\t\t\$('#password_strength').html(responseArr[score][1]);
\t\t}

\t\tfunction getPasswordStrength(password) {
\t\t\treturn 0 +
\t\t\t// if password has more than 0 characters give 1 point
\t\t\t( password.length > 0 ) +
\t\t\t// if password has more than 5 characters give 1 point
\t\t\t( password.length > 5 ) +
\t\t\t// if password has more than 12 characters give 1 point
\t\t\t( password.length > 12 ) +
\t\t\t// if password has both lower and uppercase characters give 1 point
\t\t\t( /[a-z]/.test(password) && /[A-Z]/.test(password) ) +
\t\t\t// if password has at least one number AND at least 1 other character give 1 point
\t\t\t( /\\d/.test(password) && /\\D/.test(password) ) +
\t\t\t// if password has a combination of other characters and special characters give 1 point
\t\t\t( /[!@#\$%^&*?_~\\-(),]/.test(password) && /\\w/.test(password) );
\t\t}

\t\tinputField
\t\t\t.bind('keyup blur', trigger)
\t\t\t.after('<div id=\"password_strength\"></div>');
\t});
};

\$(function() {
\t\$('input[name=new_password]').passwordStrength();
});

})(jQuery); // Avoid conflicts with other libraries

</script>
";
    }

    public function getTemplateName()
    {
        return "@vse_passwordstrength/password_strength.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
