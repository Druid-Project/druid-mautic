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

/* @bundles/LeadBundle/Form/Type/FilterType.php */
class __TwigTemplate_505749e032a2e770fdce8744fe392264 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Provider\\FormAdjustmentsProviderInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class FilterType extends AbstractType
{
    public function __construct(
        private FormAdjustmentsProviderInterface \$formAdjustmentsProvider,
        private ListModel \$listModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$fieldChoices = \$this->listModel->getChoiceFields();

        \$builder->add(
            'glue',
            ChoiceType::class,
            [
                'label'   => false,
                'choices' => [
                    'mautic.lead.list.form.glue.and' => 'and',
                    'mautic.lead.list.form.glue.or'  => 'or',
                ],
                'attr' => [
                    'class'    => 'form-control not-chosen glue-select',
                    'onchange' => 'Mautic.updateFilterPositioning(this)',
                ],
            ]
        );

        \$formModifier = function (FormEvent \$event) use (\$fieldChoices): void {
            \$data        = (array) \$event->getData();
            \$form        = \$event->getForm();
            \$fieldAlias  = \$data['field'] ?? null;
            \$fieldObject = \$data['object'] ?? 'behaviors';
            // Looking for behaviors for BC reasons as some filters were moved from 'lead' to 'behaviors'.
            \$field       = \$fieldChoices[\$fieldObject][\$fieldAlias] ?? \$fieldChoices['behaviors'][\$fieldAlias] ?? null;
            \$operators   = \$field['operators'] ?? [];
            \$operator    = \$data['operator'] ?? null;

            if (\$operators && !\$operator) {
                \$operator = array_key_first(\$operators);
            }

            \$form->add(
                'operator',
                ChoiceType::class,
                [
                    'label'   => false,
                    'choices' => \$operators,
                    'attr'    => [
                        'class'    => 'form-control not-chosen',
                        'onchange' => 'Mautic.convertLeadFilterInput(this)',
                    ],
                ]
            );

            \$form->add(
                'properties',
                FilterPropertiesType::class,
                [
                    'label' => false,
                ]
            );

            if (null === \$field) {
                // The field was probably deleted since the segment was created.
                // Do not show up the filter based on a deleted field.
                return;
            }

            \$filterPropertiesType = \$form->get('properties');

            \$this->setPropertiesFormData(\$filterPropertiesType, \$data);

            if (\$fieldAlias && \$operator) {
                \$this->formAdjustmentsProvider->adjustForm(
                    \$filterPropertiesType,
                    \$fieldAlias,
                    \$fieldObject,
                    \$operator,
                    \$field
                );
            }
        };

        \$builder->addEventListener(FormEvents::PRE_SET_DATA, \$formModifier);
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, \$formModifier);
        \$builder->add('field', HiddenType::class);
        \$builder->add('object', HiddenType::class);
        \$builder->add('type', HiddenType::class);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'label'          => false,
                'error_bubbling' => false,
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['fields'] = \$this->listModel->getChoiceFields();
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'leadlist_filter';
    }

    /**
     * We have to ensure that the old data[filter] and data[display] will get to the properties form
     * to keep BC for segments created before the properties form was added and the fitler and display
     * fields were moved there.
     *
     * @param FormInterface<mixed> \$filterPropertiesType
     * @param mixed[]              \$data
     */
    private function setPropertiesFormData(FormInterface \$filterPropertiesType, array \$data): void
    {
        if (empty(\$data['properties'])) {
            \$propertiesData = [
                'filter'  => \$data['filter'] ?? null,
                'display' => \$data['display'] ?? null,
            ];
            \$filterPropertiesType->setData(\$propertiesData);
        } else {
            \$filterPropertiesType->setData(\$data['properties'] ?? []);
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
        return "@bundles/LeadBundle/Form/Type/FilterType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FilterType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/FilterType.php");
    }
}
