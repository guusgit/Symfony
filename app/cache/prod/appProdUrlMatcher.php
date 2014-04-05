<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/blog')) {
            // evry_thing_login_homepage
            if ($pathinfo === '/blog/login') {
                return array (  '_controller' => 'EvryThing\\LoginBundle\\Controller\\LoginController::loginAction',  '_route' => 'evry_thing_login_homepage',);
            }

            // evry_thing_blog_accueil
            if (preg_match('#^/blog/(?P<page>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evry_thing_blog_accueil')), array (  '_controller' => 'EvryThing\\BlogBundle\\Controller\\BlogController::accueilAction',));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // evry_thing_blog_VoirArticle
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evry_thing_blog_VoirArticle')), array (  '_controller' => 'EvryThing\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // evry_thing_blog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'EvryThing\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'evry_thing_blog_ajouter',);
                }

            }

            // evry_thing_blog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evry_thing_blog_modifier')), array (  '_controller' => 'EvryThing\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // evry_thing_blog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evry_thing_blog_supprimer')), array (  '_controller' => 'EvryThingBlogBiundle:Blog:supprimer',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
