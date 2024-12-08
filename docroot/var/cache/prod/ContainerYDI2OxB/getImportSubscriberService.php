<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\ImportSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\ImportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ImportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ImportSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\ImportSubscriber'] = new \Mautic\LeadBundle\EventListener\ImportSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
