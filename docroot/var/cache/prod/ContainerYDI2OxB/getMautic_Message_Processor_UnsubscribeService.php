<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Message_Processor_UnsubscribeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.message.processor.unsubscribe' shared service.
     *
     * @return \Mautic\EmailBundle\MonitoredEmail\Processor\Unsubscribe
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.message.processor.unsubscribe'] = new \Mautic\EmailBundle\MonitoredEmail\Processor\Unsubscribe(($container->privates['mailer.default_transport'] ?? $container->load('getMailer_DefaultTransportService')), ($container->services['mautic.message.search.contact'] ?? $container->load('getMautic_Message_Search_ContactService')), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()));
    }
}
