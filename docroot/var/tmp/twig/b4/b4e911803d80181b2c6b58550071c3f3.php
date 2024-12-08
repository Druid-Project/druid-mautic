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

/* @bundles/InstallBundle/Configurator/Form/UserStepType.php */
class __TwigTemplate_4e399b8e8cdd12fe5c5c435dba9cc6b2 extends Template
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

namespace Mautic\\InstallBundle\\Configurator\\Form;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeak;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * @extends AbstractType<mixed>
 */
class UserStepType extends AbstractType
{
    public function __construct(
        private SessionInterface \$session
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$storedData = \$this->session->get('mautic.installer.user', new \\stdClass());

        \$builder->add(
            'firstname',
            TextType::class,
            [
                'label'       => 'mautic.core.firstname',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'required'    => true,
                'data'        => (!empty(\$storedData->firstname)) ? \$storedData->firstname : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'lastname',
            TextType::class,
            [
                'label'       => 'mautic.core.lastname',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'required'    => true,
                'data'        => (!empty(\$storedData->lastname)) ? \$storedData->lastname : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'email',
            EmailType::class,
            [
                'label'      => 'mautic.install.form.user.email',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'preaddon' => 'ri-mail-line',
                ],
                'required'    => true,
                'data'        => (!empty(\$storedData->email)) ? \$storedData->email : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                    new Assert\\Email(
                        [
                            'message' => 'mautic.core.email.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'username',
            TextType::class,
            [
                'label'      => 'mautic.install.form.user.username',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required'    => true,
                'data'        => (!empty(\$storedData->username)) ? \$storedData->username : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'password',
            PasswordType::class,
            [
                'label'      => 'mautic.install.form.user.password',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.user.user.form.help.passwordrequirements',
                    'preaddon' => 'ri-lock-fill',
                ],
                'required'    => true,
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                    new Assert\\Length(
                        [
                            'min'        => 6,
                            'minMessage' => 'mautic.install.password.minlength',
                        ]
                    ),
                    new NotWeak([
                        'message' => 'mautic.user.user.password.weak',
                    ]),
                ],
            ]
        );

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'pre_extra_buttons' => [
                    [
                        'name'  => 'next',
                        'label' => 'mautic.install.next.step',
                        'type'  => 'submit',
                        'attr'  => [
                            'class'   => 'btn btn-success pull-right btn-next',
                            'icon'    => 'ri-arrow-right-circle-line',
                            'onclick' => 'MauticInstaller.showWaitMessage(event);',
                        ],
                    ],
                ],
                'apply_text'  => '',
                'save_text'   => '',
                'cancel_text' => '',
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function getBlockPrefix()
    {
        return 'install_user_step';
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
        return "@bundles/InstallBundle/Configurator/Form/UserStepType.php";
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
        return new Source("", "@bundles/InstallBundle/Configurator/Form/UserStepType.php", "/app/docroot/app/bundles/InstallBundle/Configurator/Form/UserStepType.php");
    }
}
