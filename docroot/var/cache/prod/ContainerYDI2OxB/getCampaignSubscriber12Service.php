<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber12Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\StageBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\StageBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\StageBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['Mautic\\StageBundle\\Model\\StageModel'] ?? $container->load('getStageModelService'));

        if (isset($container->services['Mautic\\StageBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\StageBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\StageBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\StageBundle\EventListener\CampaignSubscriber($a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}