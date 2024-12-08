<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/UserBundle/Form/Type/PasswordResetConfirmType.php */
class __TwigTemplate_17f044337e2bcf3707328089e3819fc8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\UserBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeak;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * @extends AbstractType<array<mixed>>
 */
class PasswordResetConfirmType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber([]));

        \$builder->add(
            'identifier',
            TextType::class,
            [
                'label'      => 'mautic.user.auth.form.loginusername',
                'label_attr' => ['class' => 'sr-only'],
                'attr'       => [
                    'class'       => 'form-control',
                    'preaddon'    => 'ri-user-6-fill',
                    'placeholder' => 'mautic.user.auth.form.loginusername',
                ],
                'required'    => true,
                'constraints' => [
                    new Assert\\NotBlank(['message' => 'mautic.user.user.passwordreset.notblank']),
                ],
            ]
        );

        \$builder->add(
            'plainPassword',
            RepeatedType::class,
            [
                'first_name'    => 'password',
                'first_options' => [
                    'label'      => 'mautic.core.password',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'        => 'form-control',
                        'placeholder'  => 'mautic.user.user.passwordreset.password.placeholder',
                        'tooltip'      => 'mautic.user.user.form.help.passwordrequirements',
                        'preaddon'     => 'ri-lock-fill',
                        'autocomplete' => 'off',
                    ],
                    'required'       => true,
                    'error_bubbling' => false,
                    'constraints'    => [
                        new Assert\\NotBlank(['message' => 'mautic.user.user.passwordreset.notblank']),
                        new Assert\\Length([
                            'min'        => 6,
                            'minMessage' => 'mautic.user.user.password.minlength',
                        ]),
                        new NotWeak([
                            'message' => 'mautic.user.user.password.weak',
                        ]),
                    ],
                ],
                'second_name'    => 'confirm',
                'second_options' => [
                    'label'      => 'mautic.user.user.form.passwordconfirm',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'        => 'form-control',
                        'placeholder'  => 'mautic.user.user.passwordreset.confirm.placeholder',
                        'tooltip'      => 'mautic.user.user.form.help.passwordrequirements',
                        'preaddon'     => 'ri-lock-fill',
                        'autocomplete' => 'off',
                    ],
                    'required'       => true,
                    'error_bubbling' => false,
                    'constraints'    => [
                        new Assert\\NotBlank(['message' => 'mautic.user.user.passwordreset.notblank']),
                    ],
                ],
                'type'            => PasswordType::class,
                'invalid_message' => 'mautic.user.user.password.mismatch',
                'required'        => true,
                'error_bubbling'  => false,
            ]
        );

        \$builder->add(
            'submit',
            SubmitType::class,
            [
                'attr' => [
                    'class' => 'btn btn-lg btn-primary btn-block',
                ],
                'label' => 'mautic.user.user.passwordreset.reset',
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function getBlockPrefix()
    {
        return 'passwordresetconfirm';
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Form/Type/PasswordResetConfirmType.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/UserBundle/Form/Type/PasswordResetConfirmType.php", "/app/docroot/app/bundles/UserBundle/Form/Type/PasswordResetConfirmType.php");
    }
}
