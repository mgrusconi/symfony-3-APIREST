<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // craftback_default_healthcheck
        if ('/app/healthcheck' === $pathinfo) {
            $ret = array (  '_controller' => 'Application\\SomeBundle\\Controller\\DefaultController::healthcheckAction',  '_route' => 'craftback_default_healthcheck',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_craftback_default_healthcheck;
            }

            return $ret;
        }
        not_craftback_default_healthcheck:

        // app.swagger_ui
        if ('/api/doc' === $pathinfo) {
            $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_appswagger_ui;
            }

            return $ret;
        }
        not_appswagger_ui:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
