<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFieldPlaceholderTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Form\Type\FormFieldPlaceholderType' shared autowired service.
     *
     * @return \Mautic\FormBundle\Form\Type\FormFieldPlaceholderType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Form\\Type\\FormFieldPlaceholderType'] = new \Mautic\FormBundle\Form\Type\FormFieldPlaceholderType();
    }
}
