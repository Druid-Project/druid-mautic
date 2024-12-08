<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_ValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService());

        if (isset($container->privates['form.type_guesser.validator'])) {
            return $container->privates['form.type_guesser.validator'];
        }

        return $container->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($a);
    }
}
