<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessBounceSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\ProcessBounceSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\ProcessBounceSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce'] ?? $container->load('getBounceService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\ProcessBounceSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\ProcessBounceSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\ProcessBounceSubscriber'] = new \Mautic\EmailBundle\EventListener\ProcessBounceSubscriber($a);
    }
}