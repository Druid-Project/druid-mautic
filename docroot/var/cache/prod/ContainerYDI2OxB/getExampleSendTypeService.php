<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExampleSendTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\ExampleSendType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\ExampleSendType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Form\\Type\\ExampleSendType'] = new \Mautic\EmailBundle\Form\Type\ExampleSendType(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
    }
}
