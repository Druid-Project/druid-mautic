<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Sms_CallbackHandlerContainerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.sms.callback_handler_container' shared service.
     *
     * @return \Mautic\SmsBundle\Callback\HandlerContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['mautic.sms.callback_handler_container'] = $instance = new \Mautic\SmsBundle\Callback\HandlerContainer();

        $instance->registerHandler(($container->services['mautic.sms.twilio.callback'] ?? $container->load('getMautic_Sms_Twilio_CallbackService')));

        return $instance;
    }
}