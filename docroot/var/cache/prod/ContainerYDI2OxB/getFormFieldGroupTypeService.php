<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFieldGroupTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Form\Type\FormFieldGroupType' shared autowired service.
     *
     * @return \Mautic\FormBundle\Form\Type\FormFieldGroupType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Form\\Type\\FormFieldGroupType'] = new \Mautic\FormBundle\Form\Type\FormFieldGroupType();
    }
}