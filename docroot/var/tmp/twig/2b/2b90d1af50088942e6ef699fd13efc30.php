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

/* @bundles/UserBundle/Form/Type/ConfigType.php */
class __TwigTemplate_904d02f474758288580a12888cc0ab7d extends Template
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

use Mautic\\ConfigBundle\\Form\\Type\\ConfigFileType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class ConfigType extends AbstractType
{
    public function __construct(
        protected CoreParametersHelper \$parameters,
        protected TranslatorInterface \$translator
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$samlEntityIdChoices = ['', \$this->parameters->get('mautic.site_url')];
        if (!empty(\$this->parameters->get('mautic.subdomain_url'))) {
            \$samlEntityIdChoices[] = \$this->parameters->get('mautic.subdomain_url');
        }
        \$builder->add('saml_idp_entity_id', ChoiceType::class,
            [
                'choices'    => array_combine(\$samlEntityIdChoices, \$samlEntityIdChoices),
                'label'      => 'mautic.user.config.form.saml.idp_entity_id_label',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'multiple'   => false,
                'attr'       => [
                    'class' => 'form-control',
                ],
            ]);

        \$builder->add(
            'saml_idp_metadata',
            ConfigFileType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.metadata',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.user.config.form.saml.idp.metadata.tooltip',
                    'rows'    => 10,
                ],
                'required'    => false,
                'constraints' => [
                    new File(
                        [
                            'mimeTypes'        => ['text/plain', 'text/xml', 'application/xml'],
                            'mimeTypesMessage' => 'mautic.core.invalid_file_type',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'saml_idp_own_certificate',
            ConfigFileType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.own_certificate',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.user.config.form.saml.idp.own_certificate.tooltip',
                ],
                'required'    => false,
                'constraints' => [
                    new File(
                        [
                            'mimeTypes'        => ['text/plain'],
                            'mimeTypesMessage' => 'mautic.core.invalid_file_type',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'saml_idp_own_private_key',
            ConfigFileType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.own_private_key',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.user.config.form.saml.idp.own_private_key.tooltip',
                ],
                'required'    => false,
                'constraints' => [
                    new File(
                        [
                            'mimeTypes'        => ['text/plain'],
                            'mimeTypesMessage' => 'mautic.core.invalid_file_type',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'saml_idp_own_password',
            PasswordType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.own_password',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.user.config.form.saml.idp.own_password.tooltip',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'saml_idp_email_attribute',
            TextType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.attribute_email',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'empty_data' => 'EmailAddress',
            ]
        );

        \$builder->add(
            'saml_idp_username_attribute',
            TextType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.attribute_username',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'saml_idp_firstname_attribute',
            TextType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.attribute_firstname',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'empty_data' => 'FirstName',
            ]
        );

        \$builder->add(
            'saml_idp_lastname_attribute',
            TextType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.attribute_lastname',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'empty_data' => 'LastName',
            ]
        );

        \$builder->add(
            'saml_idp_default_role',
            RoleListType::class,
            [
                'label'      => 'mautic.user.config.form.saml.idp.default_role',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'            => 'form-control',
                    'data-placeholder' => \$this->translator->trans('mautic.user.config.form.saml.idp.disable_creation'),
                    'tooltip'          => 'mautic.user.config.form.saml.idp.default_role.tooltip',
                ],
                'required'    => false,
                'placeholder' => '',
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['entityId'] = \$this->parameters->get('mautic.saml_idp_entity_id');
    }

    public function getBlockPrefix()
    {
        return 'userconfig';
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
        return "@bundles/UserBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/UserBundle/Form/Type/ConfigType.php");
    }
}
