<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\TagType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\TagType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\TagType'] = new \Mautic\LeadBundle\Form\Type\TagType(($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
