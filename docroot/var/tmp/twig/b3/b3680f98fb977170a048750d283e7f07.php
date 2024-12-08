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

/* @bundles/CoreBundle/Form/Type/SortableListType.php */
class __TwigTemplate_90b97c298b7a42f971e44818be42832b extends Template
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

use Mautic\\CoreBundle\\Form\\DataTransformer\\SortableListTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\Count;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class SortableListType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$constraints = (\$options['option_required']) ? [
            new Count(
                [
                    'minMessage' => 'mautic.form.lists.count',
                    'min'        => 1,
                ]
            ),
        ] : [];

        if (\$options['constraint_callback'] instanceof Callback) {
            \$constraints[] = \$options['constraint_callback'];
        }

        if (\$options['option_notblank']) {
            \$options['option_constraint'][] = new NotBlank(
                ['message' => 'mautic.form.lists.notblank']
            );
        }

        \$builder->add(
            \$builder->create(
                'list',
                CollectionType::class,
                [
                    'label'          => false,
                    'entry_type'     => (\$options['with_labels']) ? SortableValueLabelListType::class : \$options['entry_type'],
                    'entry_options'  => [
                        'label'          => false,
                        'required'       => false,
                        'attr'           => [
                            'class'         => 'form-control',
                            'preaddon'      => \$options['remove_icon'],
                            'preaddon_attr' => [
                                'onclick' => \$options['remove_onclick'],
                            ],
                            'postaddon'     => \$options['sortable'],
                        ],
                        'constraints'    => \$options['option_constraint'],
                        'error_bubbling' => true,
                    ],
                    'allow_add'      => true,
                    'allow_delete'   => true,
                    'prototype'      => true,
                    'constraints'    => \$constraints,
                    'error_bubbling' => false,
                ]
            )
        )->addModelTransformer(new SortableListTransformer(\$options['with_labels'], \$options['key_value_pairs']));
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['isSortable']     = (!empty(\$options['sortable']));
        \$view->vars['addValueButton'] = \$options['add_value_button'];
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'remove_onclick'      => 'Mautic.removeFormListOption(this);',
                'option_required'     => true,
                'option_notblank'     => true,
                'constraint_callback' => false,
                'remove_icon'         => 'ri-close-line',
                'sortable'            => 'ri-draggable handle',
                'with_labels'         => false,
                'entry_type'          => TextType::class,
                'add_value_button'    => 'mautic.core.form.list.additem',
                // Stores as [label => value] array instead of [list => [[label => the label, value => the value], ...]]
                'key_value_pairs'     => false,
                'option_constraint'   => [],
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
        return 'sortablelist';
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
        return "@bundles/CoreBundle/Form/Type/SortableListType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SortableListType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/SortableListType.php");
    }
}
