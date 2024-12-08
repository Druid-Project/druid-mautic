<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchSubscriber10Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\EventListener\SearchSubscriber' shared autowired service.
     *
     * @return \Mautic\StageBundle\EventListener\SearchSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\StageBundle\\Model\\StageModel'] ?? $container->load('getStageModelService'));

        if (isset($container->services['Mautic\\StageBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\StageBundle\\EventListener\\SearchSubscriber'];
        }
        $b = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['Mautic\\StageBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\StageBundle\\EventListener\\SearchSubscriber'];
        }

        return $container->services['Mautic\\StageBundle\\EventListener\\SearchSubscriber'] = new \Mautic\StageBundle\EventListener\SearchSubscriber($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b);
    }
}
