<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Helper_AuthIntegrationsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.helper.auth_integrations' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Helper\AuthIntegrationsHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.integrations.helper'] ?? $container->getMautic_Integrations_HelperService());

        if (isset($container->services['mautic.integrations.helper.auth_integrations'])) {
            return $container->services['mautic.integrations.helper.auth_integrations'];
        }

        return $container->services['mautic.integrations.helper.auth_integrations'] = new \Mautic\IntegrationsBundle\Helper\AuthIntegrationsHelper($a);
    }
}
