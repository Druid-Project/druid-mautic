<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\MonitoredEmail\Message' shared autowired service.
     *
     * @return \Mautic\EmailBundle\MonitoredEmail\Message
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Message'] = new \Mautic\EmailBundle\MonitoredEmail\Message();
    }
}