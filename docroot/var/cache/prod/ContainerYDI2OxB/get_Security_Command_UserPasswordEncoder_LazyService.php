<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_Command_UserPasswordEncoder_LazyService extends AppKernelProdContainer
{
    /*
     * Gets the private '.security.command.user_password_encoder.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.security.command.user_password_encoder.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('security:encode-password', [], 'Encode a password', false, function () use ($container): \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand {
            return ($container->privates['security.command.user_password_encoder'] ?? $container->load('getSecurity_Command_UserPasswordEncoderService'));
        });
    }
}