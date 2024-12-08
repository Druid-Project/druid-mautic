<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_Field_AliasService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.field.alias' shared service.
     *
     * @return \Mautic\LeadBundle\Helper\FieldAliasHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service());

        if (isset($container->services['mautic.helper.field.alias'])) {
            return $container->services['mautic.helper.field.alias'];
        }

        return $container->services['mautic.helper.field.alias'] = new \Mautic\LeadBundle\Helper\FieldAliasHelper($a);
    }
}
