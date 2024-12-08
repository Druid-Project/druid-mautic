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

/* @bundles/CoreBundle/Form/Type/DynamicContentFilterEntryType.php */
class __TwigTemplate_e1b3d73f4c3af4ee4b22846dd11c6874 extends Template
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

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\BuilderIntegrationsHelper;
use Mautic\\LeadBundle\\Helper\\FormFieldHelper;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\StageBundle\\Model\\StageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class DynamicContentFilterEntryType extends AbstractType
{
    /**
     * @var mixed[]
     */
    private \$fieldChoices = [];

    /**
     * @var mixed[]
     */
    private array \$countryChoices;

    /**
     * @var mixed[]
     */
    private array \$regionChoices;

    /**
     * @var mixed[]
     */
    private array \$timezoneChoices;

    /**
     * @var mixed[]
     */
    private array \$localeChoices;

    public function __construct(
        ListModel \$listModel,
        private StageModel \$stageModel,
        private BuilderIntegrationsHelper \$builderIntegrationsHelper
    ) {
        \$this->fieldChoices = \$listModel->getChoiceFields();

        \$this->filterFieldChoices();

        \$this->countryChoices            = FormFieldHelper::getCountryChoices();
        \$this->regionChoices             = FormFieldHelper::getRegionChoices();
        \$this->timezoneChoices           = FormFieldHelper::getTimezonesChoices();
        \$this->localeChoices             = FormFieldHelper::getLocaleChoices();
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$extraClasses = '';

        try {
            \$mauticBuilder = \$this->builderIntegrationsHelper->getBuilder('email');
            \$mauticBuilder->getName();
        } catch (IntegrationNotFoundException) {
            // Assume legacy builder
            \$extraClasses = ' legacy-builder';
        }

        \$builder->add(
            'content',
            TextareaType::class,
            [
                'label' => 'mautic.core.dynamicContent.alt_content',
                'attr'  => [
                    'class' => 'form-control editor editor-dynamic-content'.\$extraClasses,
                ],
            ]
        );

        \$builder->add(
            \$builder->create(
                'filters',
                CollectionType::class,
                [
                    'entry_type'    => DynamicContentFilterEntryFiltersType::class,
                    'entry_options' => [
                        'label' => false,
                        'attr'  => [
                            'class' => 'form-control',
                        ],
                        'countries' => \$this->countryChoices,
                        'regions'   => \$this->regionChoices,
                        'timezones' => \$this->timezoneChoices,
                        'stages'    => \$this->getStageList(),
                        'locales'   => \$this->localeChoices,
                        'fields'    => \$this->fieldChoices,
                    ],
                    'error_bubbling' => false,
                    'mapped'         => true,
                    'allow_add'      => true,
                    'allow_delete'   => true,
                    'label'          => false,
                ]
            )
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['fields'] = \$this->fieldChoices;
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

    private function filterFieldChoices(): void
    {
        \$this->fieldChoices['lead'] = array_filter(
            \$this->fieldChoices['lead'],
            fn (\$key): bool => !in_array(
                \$key,
                [
                    'company',
                    'campaign',
                    'device_type',
                    'device_brand',
                    'device_os',
                    'lead_email_received',
                    'tags',
                    'dnc_bounced',
                    'dnc_unsubscribed',
                    'dnc_bounced_sms',
                    'dnc_unsubscribed_sms',
                    'hit_url',
                ]
            ),
            ARRAY_FILTER_USE_KEY
        );
    }

    private function getStageList(): array
    {
        \$stages = \$this->stageModel->getRepository()->getSimpleList();

        foreach (\$stages as \$stage) {
            \$stages[\$stage['value']] = \$stage['label'];
        }

        return \$stages;
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
        return "@bundles/CoreBundle/Form/Type/DynamicContentFilterEntryType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicContentFilterEntryType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/DynamicContentFilterEntryType.php");
    }
}
