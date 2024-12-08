<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDynamicContentDecisionTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\Form\Type\DynamicContentDecisionType' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\Form\Type\DynamicContentDecisionType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentDecisionType'])) {
            return $container->services['Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentDecisionType'];
        }

        return $container->services['Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentDecisionType'] = new \Mautic\DynamicContentBundle\Form\Type\DynamicContentDecisionType($a);
    }
}
