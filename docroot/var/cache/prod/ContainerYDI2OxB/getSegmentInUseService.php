<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentInUseService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Validator\Constraints\SegmentInUse' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Validator\Constraints\SegmentInUse
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Validator\\Constraints\\SegmentInUse'] = new \Mautic\LeadBundle\Form\Validator\Constraints\SegmentInUse();
    }
}