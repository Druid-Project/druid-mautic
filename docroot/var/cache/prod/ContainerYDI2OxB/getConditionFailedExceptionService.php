<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConditionFailedExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\Exception\ConditionFailedException' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Exception\ConditionFailedException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\Exception\\ConditionFailedException'] = new \Mautic\CampaignBundle\Executioner\Exception\ConditionFailedException();
    }
}
