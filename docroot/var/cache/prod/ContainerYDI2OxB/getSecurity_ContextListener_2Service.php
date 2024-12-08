<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ContextListener_2Service extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.context_listener.2' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.context_listener.2'])) {
            return $container->privates['security.context_listener.2'];
        }

        return $container->privates['security.context_listener.2'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['mautic.user.provider'] ?? $container->getMautic_User_ProviderService());
        }, 1), 'oauth2_area', ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), $a, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), 1 => 'enableUsageTracking']);
    }
}
