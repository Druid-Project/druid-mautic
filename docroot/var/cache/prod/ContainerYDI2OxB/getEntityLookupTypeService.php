<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityLookupTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\EntityLookupType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\EntityLookupType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService());

        if (isset($container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'])) {
            return $container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'])) {
            return $container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'])) {
            return $container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'];
        }

        return $container->services['Mautic\\CoreBundle\\Form\\Type\\EntityLookupType'] = new \Mautic\CoreBundle\Form\Type\EntityLookupType($a, ($container->services['translator'] ?? $container->getTranslator2Service()), $b, $c);
    }
}
