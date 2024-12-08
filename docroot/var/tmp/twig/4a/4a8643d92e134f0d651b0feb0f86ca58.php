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

/* @bundles/LeadBundle/Form/Type/ConfigType.php */
class __TwigTemplate_9d3e8db4307a32bcc3d4de24eef3b81f extends Template
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

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'contact_allow_multiple_companies',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.core.config.allow_multiple_companies',
                'attr'  => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.core.config.allow_multiple_companies.tooltip',
                ],
                'data' => (bool) (\$options['data']['contact_allow_multiple_companies'] ?? true),
            ]
        );

        \$builder->add(
            'contact_unique_identifiers_operator',
            ChoiceType::class,
            [
                'choices'           => [
                    'mautic.core.config.contact_unique_identifiers_operator.or'    => CompositeExpression::TYPE_OR,
                    'mautic.core.config.contact_unique_identifiers_operator.and'   => CompositeExpression::TYPE_AND,
                ],
                'label'             => 'mautic.core.config.unique_identifiers_operator',
                'required'          => false,
                'attr'              => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.core.config.unique_identifiers_operator.tooltip',
                ],
                'placeholder'       => false,
            ]
        );

        \$builder->add(
            'background_import_if_more_rows_than',
            NumberType::class,
            [
                'label'      => 'mautic.lead.background.import.if.more.rows.than',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.background.import.if.more.rows.than.tooltip',
                ],
            ]
        );

        \$formModifier = static function (FormInterface \$form, \$currentColumns): void {
            \$order        = [];
            \$orderColumns = [];
            if (!empty(\$currentColumns)) {
                \$orderColumns = array_values(\$currentColumns);
                \$order        = htmlspecialchars(json_encode(\$orderColumns), ENT_QUOTES, 'UTF-8');
            }
            \$form->add(
                'contact_columns',
                ContactColumnsType::class,
                [
                    'label'       => 'mautic.config.tab.columns',
                    'label_attr'  => ['class' => 'control-label'],
                    'attr'        => [
                        'class'         => 'form-control multiselect',
                        'data-sortable' => 'true',
                        'data-order'    => \$order,
                    ],
                    'multiple'    => true,
                    'required'    => true,
                    'expanded'    => false,
                    'constraints' => [
                        new NotBlank(
                            ['message' => 'mautic.core.value.required']
                        ),
                    ],
                    'data'=> array_flip(\$orderColumns),
                ]
            );
        };

        \$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) use (\$formModifier): void {
                \$data    = \$event->getData();
                \$columns = \$data['contact_columns'] ?? [];
                \$formModifier(\$event->getForm(), \$columns);
            }
        );

        // Build the columns selector
        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) use (\$formModifier): void {
                \$data    = \$event->getData();
                \$columns = \$data['contact_columns'] ?? [];
                \$formModifier(\$event->getForm(), \$columns);
            }
        );

        \$builder->add(
            'contact_export_in_background',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.lead.background.export.csv',
                'data'  => \$options['data']['contact_export_in_background'] ?? false,
                'attr'  => [
                    'tooltip' => 'mautic.lead.background.export.csv.tooltip',
                ],
            ]
        );
    }

    public function getBlockPrefix(): string
    {
        return 'leadconfig';
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
        return "@bundles/LeadBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/ConfigType.php");
    }
}
