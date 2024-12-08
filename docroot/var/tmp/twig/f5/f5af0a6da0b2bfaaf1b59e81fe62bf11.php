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

/* @bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php */
class __TwigTemplate_0947241308d59eac5f43082618dda7a2 extends Template
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

use Mautic\\LeadBundle\\Form\\Type\\FilterTrait;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class DynamicContentFilterEntryFiltersType extends AbstractType
{
    use FilterTrait;

    public function __construct(
        private TranslatorInterface \$translator,
        private ListModel \$listModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'glue',
            ChoiceType::class,
            [
                'label'             => false,
                'choices'           => [
                    'mautic.lead.list.form.glue.and' => 'and',
                    'mautic.lead.list.form.glue.or'  => 'or',
                ],
                'attr'              => [
                    'class'    => 'form-control not-chosen glue-select',
                    'onchange' => 'Mautic.updateFilterPositioning(this)',
                ],
            ]
        );

        \$formModifier = function (FormEvent \$event, \$eventName): void {
            \$this->buildFiltersForm(\$eventName, \$event, \$this->translator);
        };

        \$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) use (\$formModifier): void {
                \$formModifier(\$event, FormEvents::PRE_SET_DATA);
            }
        );

        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) use (\$formModifier): void {
                \$formModifier(\$event, FormEvents::PRE_SUBMIT);
            }
        );

        \$builder->add('field', HiddenType::class);
        \$builder->add('object', HiddenType::class);
        \$builder->add('type', HiddenType::class);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'countries',
                'regions',
                'timezones',
                'stages',
                'locales',
                'fields',
                'lists',
            ]
        );

        \$resolver->setDefaults(
            [
                'label'          => false,
                'error_bubbling' => false,
                // @see \\Mautic\\LeadBundle\\Controller\\AjaxController::loadSegmentFilterFormAction()
                'lists'          => \$this->listModel->getChoiceFields()['lead']['leadlist']['properties']['list'] ?? [],
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
        return "@bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php");
    }
}
