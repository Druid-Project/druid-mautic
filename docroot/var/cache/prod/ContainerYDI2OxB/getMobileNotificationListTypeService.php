<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMobileNotificationListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Form\Type\MobileNotificationListType' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Form\Type\MobileNotificationListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationListType'] = new \Mautic\NotificationBundle\Form\Type\MobileNotificationListType();
    }
}
