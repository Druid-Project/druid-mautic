<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Entity\EventRepository' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Entity\EventRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Entity\\EventRepository'] = new \Mautic\CampaignBundle\Entity\EventRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
