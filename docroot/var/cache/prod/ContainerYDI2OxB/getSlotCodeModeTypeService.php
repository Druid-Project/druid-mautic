<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlotCodeModeTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SlotCodeModeType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SlotCodeModeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SlotCodeModeType'] = new \Mautic\CoreBundle\Form\Type\SlotCodeModeType();
    }
}
