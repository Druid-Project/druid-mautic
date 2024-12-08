<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTweetSendTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Form\Type\TweetSendType' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Form\Type\TweetSendType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\TweetSendType'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\TweetSendType'];
        }

        return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\TweetSendType'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TweetSendType($a);
    }
}
