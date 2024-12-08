<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_SendMessageService extends AppKernelProdContainer
{
    /*
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.eyKoib5'] ?? $container->load('get_ServiceLocator_EyKoib5Service'));

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }

        $container->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => 'email'], 'Mautic\\MessengerBundle\\Message\\TestEmail' => [0 => 'email'], 'Mautic\\MessengerBundle\\Message\\TestHit' => [0 => 'hit'], 'Mautic\\MessengerBundle\\Message\\TestFailed' => [0 => 'failed'], 'Mautic\\MessengerBundle\\Message\\PageHitNotification' => [0 => 'hit'], 'Mautic\\MessengerBundle\\Message\\EmailHitNotification' => [0 => 'hit']], $a), $b);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
