<?php

/* @paybas_quicklogin/event/overall_footer_after.html */
class __TwigTemplate_d7fd7d12ce7589cb666240ff0afd7fb32e37c0c82d9e55965674548871fef310 extends Twig_Template
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
        if (((isset($context["S_QUICK_LOGIN"]) ? $context["S_QUICK_LOGIN"] : null) &&  !(isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null))) {
            // line 2
            echo "\t";
            $location = "quick_login.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quick_login.html", "@paybas_quicklogin/event/overall_footer_after.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "@paybas_quicklogin/event/overall_footer_after.html";
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
