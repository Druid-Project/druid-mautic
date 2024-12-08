<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigType6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\ConfigType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\ConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\ConfigType'] = new \Mautic\CoreBundle\Form\Type\ConfigType(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['Mautic\\CoreBundle\\Helper\\LanguageHelper'] ?? $container->load('getLanguageHelperService')), ($container->services['mautic.ip_lookup.factory'] ?? $container->getMautic_IpLookup_FactoryService()), ($container->services['mautic.ip_lookup'] ?? $container->getMautic_IpLookupService()), ($container->services['Mautic\\CoreBundle\\Shortener\\Shortener'] ?? $container->getShortenerService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}