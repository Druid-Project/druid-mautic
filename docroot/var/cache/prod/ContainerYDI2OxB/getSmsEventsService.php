<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmsEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\SmsEvents' shared autowired service.
     *
     * @return \Mautic\SmsBundle\SmsEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\SmsEvents'] = new \Mautic\SmsBundle\SmsEvents();
    }
}
