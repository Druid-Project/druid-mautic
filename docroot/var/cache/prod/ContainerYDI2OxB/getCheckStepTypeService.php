<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckStepTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\InstallBundle\Configurator\Form\CheckStepType' shared autowired service.
     *
     * @return \Mautic\InstallBundle\Configurator\Form\CheckStepType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\InstallBundle\\Configurator\\Form\\CheckStepType'] = new \Mautic\InstallBundle\Configurator\Form\CheckStepType();
    }
}
