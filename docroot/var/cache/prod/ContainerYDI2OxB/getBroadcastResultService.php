<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBroadcastResultService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\Broadcast\BroadcastResult' shared autowired service.
     *
     * @return \Mautic\SmsBundle\Broadcast\BroadcastResult
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\Broadcast\\BroadcastResult'] = new \Mautic\SmsBundle\Broadcast\BroadcastResult();
    }
}
