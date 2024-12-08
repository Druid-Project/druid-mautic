<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerSetupTransportsService extends AppKernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($container->privates['messenger.receiver_locator'] ?? $container->load('getMessenger_ReceiverLocatorService')), [0 => 'email', 1 => 'hit', 2 => 'failed']);

        $instance->setName('messenger:setup-transports');
        $instance->setDescription('Prepare the required infrastructure for the transport');

        return $instance;
    }
}
