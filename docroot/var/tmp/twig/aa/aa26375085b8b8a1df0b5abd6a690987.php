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

/* @bundles/LeadBundle/Form/Type/ContactFrequencyType.php */
class __TwigTemplate_1102fe4ea640b03c43ff36d59bbcce1d extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class ContactFrequencyType extends AbstractType
{
    public function __construct(
        protected CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$showContactCategories = \$this->coreParametersHelper->get('show_contact_categories');
        \$showContactSegments   = \$this->coreParametersHelper->get('show_contact_segments');

        if (!empty(\$options['channels'])) {
            \$builder->add(
                'lead_channels',
                ContactChannelsType::class,
                [
                    'label'       => false,
                    'channels'    => \$options['channels'],
                    'data'        => \$options['data']['lead_channels'],
                    'public_view' => \$options['public_view'],
                ]
            );
        }

        if (!\$options['public_view']) {
            \$builder->add(
                'lead_lists',
                LeadListType::class,
                [
                    'label'      => 'mautic.lead.form.list',
                    'label_attr' => ['class' => 'control-label'],
                    'multiple'   => true,
                    'expanded'   => \$options['public_view'],
                    'required'   => false,
                ]
            );
        } elseif (\$showContactSegments) {
            \$builder->add(
                'lead_lists',
                LeadListType::class,
                [
                    'preference_center_only' => \$options['preference_center_only'],
                    'label'                  => 'mautic.lead.form.list',
                    'label_attr'             => ['class' => 'control-label'],
                    'multiple'               => true,
                    'expanded'               => true,
                    'required'               => false,
                ]
            );
        }

        if (!\$options['public_view'] || \$showContactCategories) {
            \$builder->add(
                'global_categories',
                LeadCategoryType::class,
                [
                    'label'      => 'mautic.lead.form.categories',
                    'label_attr' => ['class' => 'control-label'],
                    'multiple'   => true,
                    'expanded'   => \$options['public_view'],
                    'required'   => false,
                ]
            );
        }

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_text'     => false,
                'save_text'      => 'mautic.core.form.save',
                'cancel_onclick' => 'javascript:void(0);',
                'cancel_attr'    => [
                    'data-dismiss' => 'modal',
                ],
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(['channels']);
        \$resolver->setDefaults(
            [
                'public_view'               => false,
                'preference_center_only'    => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_contact_frequency_rules';
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
        return "@bundles/LeadBundle/Form/Type/ContactFrequencyType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/ContactFrequencyType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/ContactFrequencyType.php");
    }
}
