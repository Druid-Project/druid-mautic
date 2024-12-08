<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Api_Oauth_EventListenerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.api.oauth.event_listener' shared service.
     *
     * @return \Mautic\ApiBundle\EventListener\PreAuthorizationEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['mautic.api.oauth.event_listener'])) {
            return $container->services['mautic.api.oauth.event_listener'];
        }

        return $container->services['mautic.api.oauth.event_listener'] = new \Mautic\ApiBundle\EventListener\PreAuthorizationEventListener($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}