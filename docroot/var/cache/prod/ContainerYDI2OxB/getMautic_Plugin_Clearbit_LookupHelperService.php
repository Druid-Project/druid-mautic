<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Plugin_Clearbit_LookupHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.plugin.clearbit.lookup_helper' shared service.
     *
     * @return \MauticPlugin\MauticClearbitBundle\Helper\LookupHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.plugin.clearbit.lookup_helper'])) {
            return $container->services['mautic.plugin.clearbit.lookup_helper'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.plugin.clearbit.lookup_helper'])) {
            return $container->services['mautic.plugin.clearbit.lookup_helper'];
        }
        $c = ($container->services['Mautic\\LeadBundle\\Model\\CompanyModel'] ?? $container->getCompanyModelService());

        if (isset($container->services['mautic.plugin.clearbit.lookup_helper'])) {
            return $container->services['mautic.plugin.clearbit.lookup_helper'];
        }

        return $container->services['mautic.plugin.clearbit.lookup_helper'] = new \MauticPlugin\MauticClearbitBundle\Helper\LookupHelper($a, ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), $b, $c);
    }
}
