<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuditLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Entity\AuditLogRepository' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Entity\AuditLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Entity\\AuditLogRepository'] = new \Mautic\CoreBundle\Entity\AuditLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
