<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDateTimeTokenService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\DateTime\DateTimeToken' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\DateTime\DateTimeToken
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\DateTime\\DateTimeToken'] = new \Mautic\CoreBundle\Helper\DateTime\DateTimeToken(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['Mautic\\CoreBundle\\Helper\\DateTime\\DateTimeLocalization'] ?? $container->load('getDateTimeLocalizationService')));
    }
}
