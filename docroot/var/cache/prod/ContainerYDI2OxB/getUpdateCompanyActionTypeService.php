<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateCompanyActionTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\UpdateCompanyActionType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\UpdateCompanyActionType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\UpdateCompanyActionType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\UpdateCompanyActionType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\UpdateCompanyActionType'] = new \Mautic\LeadBundle\Form\Type\UpdateCompanyActionType($a);
    }
}
