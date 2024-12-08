<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeOperatorSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\TypeOperatorSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\TypeOperatorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }
        $c = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }
        $d = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? $container->getEmailModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }
        $e = ($container->services['Mautic\\StageBundle\\Model\\StageModel'] ?? $container->load('getStageModelService'));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }
        $f = ($container->services['Mautic\\CategoryBundle\\Model\\CategoryModel'] ?? $container->getCategoryModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }
        $g = ($container->services['Mautic\\AssetBundle\\Model\\AssetModel'] ?? $container->getAssetModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\TypeOperatorSubscriber'] = new \Mautic\LeadBundle\EventListener\TypeOperatorSubscriber($a, $b, $c, $d, $e, $f, $g, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
