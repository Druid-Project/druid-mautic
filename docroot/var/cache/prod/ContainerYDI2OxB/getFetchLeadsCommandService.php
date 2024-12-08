<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFetchLeadsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Command\FetchLeadsCommand' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Command\FetchLeadsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Command\\FetchLeadsCommand'] = new \Mautic\PluginBundle\Command\FetchLeadsCommand(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService()));
    }
}
