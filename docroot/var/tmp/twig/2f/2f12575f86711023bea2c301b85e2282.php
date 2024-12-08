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

/* @bundles/FormBundle/Form/Type/SubmitActionRepostType.php */
class __TwigTemplate_1da22c8610f79f3ae4fb13c275f7f5b0 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\Email;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\Url;

/**
 * @extends AbstractType<mixed>
 */
class SubmitActionRepostType extends AbstractType
{
    use FormFieldTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'post_url',
            UrlType::class,
            [
                'label'      => 'mautic.form.action.repost.post_url',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'preaddon' => 'ri-earth-line',
                ],
                'constraints' => [
                    new NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                    new Url(
                        [
                            'message' => 'mautic.core.valid_url_required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'authorization_header',
            TextType::class,
            [
                'label'      => 'mautic.form.action.repost.authorization_header',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.form.action.repost.authorization_header.tooltip',
                    'preaddon' => 'ri-lock-fill',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'failure_email',
            EmailType::class,
            [
                'label'      => 'mautic.form.action.repost.failure_email',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.form.action.repost.failure_email.tooltip',
                    'preaddon' => 'ri-mail-line',
                ],
                'required'    => false,
                'constraints' => new Email(
                    [
                        'message' => 'mautic.core.email.required',
                    ]
                ),
            ]
        );

        \$fields = \$this->getFormFields(\$options['attr']['data-formid'], false);

        foreach (\$fields as \$alias => \$label) {
            \$builder->add(
                \$alias,
                TextType::class,
                [
                    'label'      => \$label.\" (\$alias)\",
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class' => 'form-control',
                    ],
                    'required' => false,
                ]
            );
        }
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
        return "@bundles/FormBundle/Form/Type/SubmitActionRepostType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/SubmitActionRepostType.php", "/app/docroot/app/bundles/FormBundle/Form/Type/SubmitActionRepostType.php");
    }
}
