<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoNotContactSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\DoNotContactSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\DoNotContactSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\DoNotContactSubscriber'] = new \Mautic\LeadBundle\EventListener\DoNotContactSubscriber(($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()));
    }
}
