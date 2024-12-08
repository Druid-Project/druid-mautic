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

/* @bundles/ReportBundle/Form/Type/FilterSelectorType.php */
class __TwigTemplate_88ca0a570a2de7aec47f5be348a5f5ce extends Template
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

namespace Mautic\\ReportBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class FilterSelectorType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // Build a list of columns
        \$builder->add(
            'column',
            ChoiceType::class,
            [
                'choices'           => array_flip(\$options['filterList']),
                'expanded'          => false,
                'multiple'          => false,
                'label'             => 'mautic.report.report.label.filtercolumn',
                'label_attr'        => ['class' => 'control-label filter-column'],
                'placeholder'       => false,
                'required'          => false,
                'attr'              => [
                    'class' => 'form-control filter-columns',
                ],
            ]
        );

        \$formModifier = function (FormEvent \$formEvent) use (\$options): void {
            \$data   = \$formEvent->getData();
            \$column = \$data['column'] ?? null;
            \$form   = \$formEvent->getForm();
            if (null === \$column) {
                \$column = array_key_first(\$options['filterList']);
            }
            \$choices = \$options['operatorList'][\$column] ?? [];

            // Build a list of condition values
            \$form->add(
                'condition',
                ChoiceType::class,
                [
                    'choices'           => array_flip(\$choices),
                    'expanded'          => false,
                    'multiple'          => false,
                    'label'             => 'mautic.report.report.label.filtercondition',
                    'label_attr'        => ['class' => 'control-label filter-condition'],
                    'placeholder'       => false,
                    'required'          => false,
                    'attr'              => [
                        'class' => 'form-control not-chosen',
                    ],
                ]
            );

            if (array_key_exists('in', \$choices) && isset(\$data['value']) && is_array(\$data['value'])) {
                \$form->add('value', CollectionType::class, [
                    'entry_type'    => TextType::class,
                    'allow_add'     => true,
                    'allow_delete'  => true,
                    'label'         => 'mautic.report.report.label.filtervalue',
                    'label_attr'    => ['class' => 'control-label'],
                    'attr'          => ['class' => 'form-control filter-value'],
                    'required'      => false,
                ]);
            } else {
                \$form->add(
                    'value',
                    TextType::class,
                    [
                        'label'      => 'mautic.report.report.label.filtervalue',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => ['class' => 'form-control filter-value'],
                        'required'   => false,
                    ]
                );
            }
        };

        \$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            fn (FormEvent \$event) => \$formModifier(\$event)
        );

        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            fn (FormEvent \$event) => \$formModifier(\$event)
        );

        \$builder->add(
            'glue',
            ChoiceType::class,
            [
                'label'             => false,
                'label_attr'        => ['class' => 'control-label'],
                'attr'              => ['class' => 'form-control filter-glue not-chosen'],
                'required'          => false,
                'choices'           => [
                    'mautic.report.report.glue.choice.and' => 'and',
                    'mautic.report.report.glue.choice.or'  => 'or',
                ],
                'placeholder' => false,
            ]
        );

        \$builder->add(
            'dynamic',
            YesNoButtonGroupType::class,
            [
                'label'      => 'mautic.report.report.label.filterdynamic',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.report.report.label.filterdynamic_tooltip',
                ],
                'required' => false,
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars = array_replace(
            \$view->vars,
            [
                'filterList' => \$options['filterList'],
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'filterList'    => [],
                'operatorList'  => [],
                'operatorGroup' => 'default',
            ]
        );
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
        return "@bundles/ReportBundle/Form/Type/FilterSelectorType.php";
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
        return new Source("", "@bundles/ReportBundle/Form/Type/FilterSelectorType.php", "/app/docroot/app/bundles/ReportBundle/Form/Type/FilterSelectorType.php");
    }
}
