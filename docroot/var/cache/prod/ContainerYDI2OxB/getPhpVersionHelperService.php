<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhpVersionHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\PhpVersionHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\PhpVersionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\PhpVersionHelper'] = new \Mautic\CoreBundle\Helper\PhpVersionHelper();
    }
}