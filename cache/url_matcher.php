<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // kinerity_bestanswer_main_controller
        if (preg_match('#^/(?P<action>mark_answer|unmark_answer)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'kinerity_bestanswer_main_controller')), array (  '_controller' => 'kinerity.bestanswer.main.controller:change_post_status',));
        }

        // phpbb_boardannouncements_controller
        if ($pathinfo === '/boardannouncements/close') {
            return array (  '_controller' => 'phpbb.boardannouncements.controller:close_announcement',  '_route' => 'phpbb_boardannouncements_controller',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
