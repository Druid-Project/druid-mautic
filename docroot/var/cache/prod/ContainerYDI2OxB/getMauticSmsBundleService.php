<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticSmsBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\MauticSmsBundle' shared autowired service.
     *
     * @return \Mautic\SmsBundle\MauticSmsBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\MauticSmsBundle'] = new \Mautic\SmsBundle\MauticSmsBundle();
    }
}
