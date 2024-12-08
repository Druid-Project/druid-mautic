<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Form_Collector_ObjectService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.form.collector.object' shared service.
     *
     * @return \Mautic\FormBundle\Collector\ObjectCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.form.collector.object'])) {
            return $container->services['mautic.form.collector.object'];
        }

        return $container->services['mautic.form.collector.object'] = new \Mautic\FormBundle\Collector\ObjectCollector($a);
    }
}
