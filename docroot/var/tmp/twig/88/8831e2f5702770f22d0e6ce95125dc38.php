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

/* @bundles/CoreBundle/Form/Type/DynamicListType.php */
class __TwigTemplate_c8e5874b0e5a42f659d51e58688c1b8f extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Count;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class DynamicListType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event): void {
                \$data = \$event->getData();

                // Reorder list in case keys were dynamically removed.
                if (is_array(\$data)) {
                    \$data = array_values(\$data);
                    \$event->setData(\$data);
                }
            }
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['isSortable'] = (!empty(\$options['sortable']));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'remove_onclick'  => 'Mautic.removeFormListOption(this);',
                'option_required' => true,
                'option_notblank' => true,
                'remove_icon'     => 'ri-close-line',
                'sortable'        => 'ri-more-2-line handle',
                'label'           => false,
                'entry_options'   => [
                    'label'    => false,
                    'required' => false,
                    'attr'     => [
                        'class'         => 'form-control',
                        'preaddon'      => fn (Options \$options) => \$options['remove_icon'],
                        'preaddon_attr' => fn (Options \$options): array => [
                            'onclick' => \$options['remove_onclick'],
                        ],
                        'postaddon'     => fn (Options \$options) => \$options['sortable'],
                    ],

                    'constraints'    => fn (Options \$options): array => (\$options['option_notblank']) ? [
                        new NotBlank(
                            ['message' => 'mautic.form.lists.notblank']
                        ),
                    ] : [],
                    'error_bubbling' => true,
                ],
                'allow_add'       => true,
                'allow_delete'    => true,
                'prototype'       => true,
                'constraints'     => fn (Options \$options): array => (\$options['option_required']) ? [
                    new Count(
                        [
                            'minMessage' => 'mautic.form.lists.count',
                            'min'        => 1,
                        ]
                    ),
                ] : [],
                'error_bubbling'  => false,
            ]
        );

        \$resolver->setDefined(
            [
                'sortable',
                'remove_onclick',
                'option_required',
                'option_notblank',
                'remove_icon',
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'dynamiclist';
    }

    public function getParent()
    {
        return CollectionType::class;
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
        return "@bundles/CoreBundle/Form/Type/DynamicListType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicListType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/DynamicListType.php");
    }
}
