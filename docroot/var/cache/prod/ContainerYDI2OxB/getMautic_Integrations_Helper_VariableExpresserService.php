<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Helper_VariableExpresserService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.helper.variable_expresser' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\VariableExpresser\VariableExpresserHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.helper.variable_expresser'] = new \Mautic\IntegrationsBundle\Sync\VariableExpresser\VariableExpresserHelper();
    }
}
