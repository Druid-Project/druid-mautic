<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormSubmitActionPointsChangeTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\FormSubmitActionPointsChangeType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\FormSubmitActionPointsChangeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\FormSubmitActionPointsChangeType'] = new \Mautic\LeadBundle\Form\Type\FormSubmitActionPointsChangeType();
    }
}
