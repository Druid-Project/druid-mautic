<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLightsaml_Container_StoreService extends AppKernelProdContainer
{
    /*
     * Gets the private 'lightsaml.container.store' shared service.
     *
     * @return \LightSaml\SymfonyBridgeBundle\Bridge\Container\StoreContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.security.saml.id_store'] ?? $container->load('getMautic_Security_Saml_IdStoreService'));

        if (isset($container->privates['lightsaml.container.store'])) {
            return $container->privates['lightsaml.container.store'];
        }

        return $container->privates['lightsaml.container.store'] = new \LightSaml\SymfonyBridgeBundle\Bridge\Container\StoreContainer(new \LightSaml\Store\Request\RequestStateSessionStore(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), 'main', 'saml_request_state_'), $a, ($container->privates['lightsaml.store.sso_state'] ?? $container->load('getLightsaml_Store_SsoStateService')));
    }
}
