<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_LatestCommand_LazyService extends AppKernelProdContainer
{
    /*
     * Gets the private '.doctrine_migrations.latest_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine_migrations.latest_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:latest', [], 'Outputs the latest version', false, function () use ($container): \Doctrine\Migrations\Tools\Console\Command\LatestCommand {
            return ($container->privates['doctrine_migrations.latest_command'] ?? $container->load('getDoctrineMigrations_LatestCommandService'));
        });
    }
}
