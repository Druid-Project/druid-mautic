<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_Renderer_HincludeService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['fragment.renderer.hinclude'])) {
            return $container->privates['fragment.renderer.hinclude'];
        }

        $container->privates['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($a, ($container->privates['uri_signer'] ?? ($container->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('nullable:resolve:MAUTIC_SECRET_KEY')))), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }
}