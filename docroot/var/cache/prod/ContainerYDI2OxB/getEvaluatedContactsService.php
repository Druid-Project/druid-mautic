<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvaluatedContactsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\Result\EvaluatedContacts' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Result\EvaluatedContacts
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts'] = new \Mautic\CampaignBundle\Executioner\Result\EvaluatedContacts();
    }
}
