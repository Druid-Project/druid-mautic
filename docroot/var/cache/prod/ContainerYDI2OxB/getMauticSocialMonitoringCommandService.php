<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticSocialMonitoringCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Command\MauticSocialMonitoringCommand' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Command\MauticSocialMonitoringCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Command\\MauticSocialMonitoringCommand'] = new \MauticPlugin\MauticSocialBundle\Command\MauticSocialMonitoringCommand(($container->services['MauticPlugin\\MauticSocialBundle\\Model\\MonitoringModel'] ?? $container->load('getMonitoringModelService')));
    }
}
