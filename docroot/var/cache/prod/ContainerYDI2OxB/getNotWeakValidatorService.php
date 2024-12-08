<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotWeakValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Form\Validator\Constraints\NotWeakValidator' shared autowired service.
     *
     * @return \Mautic\UserBundle\Form\Validator\Constraints\NotWeakValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel'] ?? $container->load('getPasswordStrengthEstimatorModelService'));

        if (isset($container->services['Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeakValidator'])) {
            return $container->services['Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeakValidator'];
        }

        return $container->services['Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeakValidator'] = new \Mautic\UserBundle\Form\Validator\Constraints\NotWeakValidator($a);
    }
}
