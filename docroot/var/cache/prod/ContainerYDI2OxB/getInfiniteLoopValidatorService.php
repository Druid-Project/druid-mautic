<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInfiniteLoopValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoopValidator' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoopValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Form\\Validator\\Constraints\\InfiniteLoopValidator'] = new \Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoopValidator();
    }
}