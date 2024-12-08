<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\EventListener\AssetSubscriber' shared autowired service.
     *
     * @return \Mautic\AssetBundle\EventListener\AssetSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\AssetBundle\\EventListener\\AssetSubscriber'])) {
            return $container->services['Mautic\\AssetBundle\\EventListener\\AssetSubscriber'];
        }

        return $container->services['Mautic\\AssetBundle\\EventListener\\AssetSubscriber'] = new \Mautic\AssetBundle\EventListener\AssetSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
