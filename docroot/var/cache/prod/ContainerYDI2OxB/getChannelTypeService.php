<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Form\Type\ChannelType' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Form\Type\ChannelType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ChannelBundle\\Form\\Type\\ChannelType'] = new \Mautic\ChannelBundle\Form\Type\ChannelType();
    }
}
