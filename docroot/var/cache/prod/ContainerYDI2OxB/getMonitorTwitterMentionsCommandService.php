<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonitorTwitterMentionsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Command\MonitorTwitterMentionsCommand' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Command\MonitorTwitterMentionsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Command\\MonitorTwitterMentionsCommand'] = new \MauticPlugin\MauticSocialBundle\Command\MonitorTwitterMentionsCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService()), ($container->services['mautic.social.helper.twitter_command'] ?? $container->load('getMautic_Social_Helper_TwitterCommandService')), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}