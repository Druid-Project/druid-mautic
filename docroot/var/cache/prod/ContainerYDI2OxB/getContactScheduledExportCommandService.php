<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactScheduledExportCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Command\ContactScheduledExportCommand' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Command\ContactScheduledExportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Command\\ContactScheduledExportCommand'] = new \Mautic\LeadBundle\Command\ContactScheduledExportCommand(($container->services['Mautic\\LeadBundle\\Model\\ContactExportSchedulerModel'] ?? $container->load('getContactExportSchedulerModelService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['mautic.helper.twig.formatter'] ?? $container->getMautic_Helper_Twig_FormatterService()));
    }
}
