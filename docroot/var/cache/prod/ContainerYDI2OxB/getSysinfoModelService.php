<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSysinfoModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Model\SysinfoModel' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Model\SysinfoModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ConfigBundle\\Model\\SysinfoModel'] = new \Mautic\ConfigBundle\Model\SysinfoModel(($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['mautic.install.service'] ?? $container->getMautic_Install_ServiceService()), ($container->services['mautic.install.configurator.step.check'] ?? $container->getMautic_Install_Configurator_Step_CheckService()));
    }
}
