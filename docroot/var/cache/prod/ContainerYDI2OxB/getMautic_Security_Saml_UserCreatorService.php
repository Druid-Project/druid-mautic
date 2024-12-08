<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Security_Saml_UserCreatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.security.saml.user_creator' shared service.
     *
     * @return \Mautic\UserBundle\Security\SAML\User\UserCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['mautic.security.saml.user_creator'])) {
            return $container->services['mautic.security.saml.user_creator'];
        }
        $b = ($container->services['Mautic\\UserBundle\\Model\\UserModel'] ?? $container->getUserModelService());

        if (isset($container->services['mautic.security.saml.user_creator'])) {
            return $container->services['mautic.security.saml.user_creator'];
        }

        return $container->services['mautic.security.saml.user_creator'] = new \Mautic\UserBundle\Security\SAML\User\UserCreator($a, ($container->services['mautic.security.saml.username_mapper'] ?? $container->load('getMautic_Security_Saml_UsernameMapperService')), $b, ($container->privates['security.user_password_hasher'] ?? $container->getSecurity_UserPasswordHasherService()), $container->getEnv('nullable:resolve:MAUTIC_SAML_IDP_DEFAULT_ROLE'));
    }
}
