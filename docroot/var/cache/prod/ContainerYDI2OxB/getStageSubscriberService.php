<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\EventListener\StageSubscriber' shared autowired service.
     *
     * @return \Mautic\StageBundle\EventListener\StageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\StageBundle\\EventListener\\StageSubscriber'])) {
            return $container->services['Mautic\\StageBundle\\EventListener\\StageSubscriber'];
        }

        return $container->services['Mautic\\StageBundle\\EventListener\\StageSubscriber'] = new \Mautic\StageBundle\EventListener\StageSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}