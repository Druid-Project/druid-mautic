<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\CsvHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\CsvHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\CsvHelper'] = new \Mautic\CoreBundle\Helper\CsvHelper();
    }
}
