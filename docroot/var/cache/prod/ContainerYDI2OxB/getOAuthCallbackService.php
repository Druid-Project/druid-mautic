<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOAuthCallbackService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\Form\Validator\Constraints\OAuthCallback' shared autowired service.
     *
     * @return \Mautic\ApiBundle\Form\Validator\Constraints\OAuthCallback
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ApiBundle\\Form\\Validator\\Constraints\\OAuthCallback'] = new \Mautic\ApiBundle\Form\Validator\Constraints\OAuthCallback();
    }
}
