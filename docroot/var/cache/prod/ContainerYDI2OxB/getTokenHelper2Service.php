<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTokenHelper2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Helper\TokenHelper' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Helper\TokenHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Helper\\TokenHelper'] = new \Mautic\LeadBundle\Helper\TokenHelper();
    }
}
