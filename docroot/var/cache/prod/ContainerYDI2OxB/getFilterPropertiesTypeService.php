<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterPropertiesTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\FilterPropertiesType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\FilterPropertiesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\FilterPropertiesType'] = new \Mautic\LeadBundle\Form\Type\FilterPropertiesType();
    }
}
