<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventLeadCampaignsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\CampaignEventLeadCampaignsType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\CampaignEventLeadCampaignsType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadCampaignsType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadCampaignsType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadCampaignsType'] = new \Mautic\LeadBundle\Form\Type\CampaignEventLeadCampaignsType($a);
    }
}
