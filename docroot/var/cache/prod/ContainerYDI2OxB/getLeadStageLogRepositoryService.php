<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadStageLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Entity\LeadStageLogRepository' shared autowired service.
     *
     * @return \Mautic\StageBundle\Entity\LeadStageLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\StageBundle\\Entity\\LeadStageLogRepository'] = new \Mautic\StageBundle\Entity\LeadStageLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
