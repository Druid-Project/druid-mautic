<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIP2LocationAPILookupService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\IpLookup\IP2LocationAPILookup' shared autowired service.
     *
     * @return \Mautic\CoreBundle\IpLookup\IP2LocationAPILookup
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\IpLookup\\IP2LocationAPILookup'] = new \Mautic\CoreBundle\IpLookup\IP2LocationAPILookup(NULL, NULL, NULL, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['mautic.http.client'] ?? ($container->services['mautic.http.client'] = new \GuzzleHttp\Client())), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
