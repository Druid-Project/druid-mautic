<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Entity\MessageRepository' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Entity\MessageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ChannelBundle\\Entity\\MessageRepository'] = new \Mautic\ChannelBundle\Entity\MessageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
