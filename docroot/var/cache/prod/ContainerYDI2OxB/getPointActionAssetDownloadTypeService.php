<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointActionAssetDownloadTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\Form\Type\PointActionAssetDownloadType' shared autowired service.
     *
     * @return \Mautic\AssetBundle\Form\Type\PointActionAssetDownloadType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\AssetBundle\\Form\\Type\\PointActionAssetDownloadType'] = new \Mautic\AssetBundle\Form\Type\PointActionAssetDownloadType();
    }
}