<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentOperatorQuerySubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\SegmentOperatorQuerySubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\SegmentOperatorQuerySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\SegmentOperatorQuerySubscriber'] = new \Mautic\LeadBundle\EventListener\SegmentOperatorQuerySubscriber();
    }
}
