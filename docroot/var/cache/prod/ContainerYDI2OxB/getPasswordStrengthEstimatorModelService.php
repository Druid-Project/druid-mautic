<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordStrengthEstimatorModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Model\PasswordStrengthEstimatorModel' shared autowired service.
     *
     * @return \Mautic\UserBundle\Model\PasswordStrengthEstimatorModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel'])) {
            return $container->services['Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel'];
        }

        return $container->services['Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel'] = new \Mautic\UserBundle\Model\PasswordStrengthEstimatorModel($a);
    }
}
