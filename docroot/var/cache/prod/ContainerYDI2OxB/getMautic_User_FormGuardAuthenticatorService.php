<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_User_FormGuardAuthenticatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.user.form_guard_authenticator' shared service.
     *
     * @return \Mautic\UserBundle\Security\Authenticator\FormAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.user.form_guard_authenticator'])) {
            return $container->services['mautic.user.form_guard_authenticator'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.user.form_guard_authenticator'])) {
            return $container->services['mautic.user.form_guard_authenticator'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['mautic.user.form_guard_authenticator'])) {
            return $container->services['mautic.user.form_guard_authenticator'];
        }
        $d = ($container->services['Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel'] ?? $container->load('getPasswordStrengthEstimatorModelService'));

        if (isset($container->services['mautic.user.form_guard_authenticator'])) {
            return $container->services['mautic.user.form_guard_authenticator'];
        }

        return $container->services['mautic.user.form_guard_authenticator'] = new \Mautic\UserBundle\Security\Authenticator\FormAuthenticator($a, ($container->privates['security.user_password_hasher'] ?? $container->getSecurity_UserPasswordHasherService()), $b, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->get_Container_Private_Security_Csrf_TokenManagerService()), $c, $d);
    }
}
