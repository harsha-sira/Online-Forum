<?php

/* @vse_scrolltotop/event/overall_footer_after.html */
class __TwigTemplate_d3d1d85ca3bb4d76d6fa9fa200ef9aa7b1b9989c05ac90edd22c3cd5efbe9143 extends Twig_Template
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
        echo "<div class=\"scroll-btn\"><div class=\"scroll-btn-arrow\"></div></div>

<script>

(function(\$) { // Avoid conflicts with other libraries

'use strict';

\$(function() {
\tvar settings = {
\t\t\tmin: 200,
\t\t\tscrollSpeed: 400
\t\t},
\t\ttoTop = \$('.scroll-btn'),
\t\ttoTopHidden = true;

\t\$(window).scroll(function() {
\t\tvar pos = \$(this).scrollTop();
\t\tif (pos > settings.min && toTopHidden) {
\t\t\ttoTop.stop(true, true).fadeIn();
\t\t\ttoTopHidden = false;
\t\t} else if(pos <= settings.min && !toTopHidden) {
\t\t\ttoTop.stop(true, true).fadeOut();
\t\t\ttoTopHidden = true;
\t\t}
\t});

\ttoTop.bind('click touchstart', function() {
\t\t\$('html, body').animate({
\t\t\tscrollTop: 0
\t\t}, settings.scrollSpeed);
\t});
});

})(jQuery);

</script>
";
    }

    public function getTemplateName()
    {
        return "@vse_scrolltotop/event/overall_footer_after.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
