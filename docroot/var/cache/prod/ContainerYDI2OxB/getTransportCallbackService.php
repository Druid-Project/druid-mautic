<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransportCallbackService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Model\TransportCallback' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Model\TransportCallback
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Model\\TransportCallback'] = new \Mautic\EmailBundle\Model\TransportCallback(($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()), ($container->services['mautic.message.search.contact'] ?? $container->load('getMautic_Message_Search_ContactService')), ($container->services['Mautic\\EmailBundle\\Model\\EmailStatModel'] ?? $container->getEmailStatModelService()));
    }
}
