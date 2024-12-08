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

/* @bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php */
class __TwigTemplate_d1dc4e915451431b89afa0b02e84ae91 extends Template
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

use Mautic\\CampaignBundle\\Form\\Type\\CampaignListType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class CampaignEventLeadCampaignsType extends AbstractType
{
    public function __construct(
        protected ListModel \$listModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('campaigns',
            CampaignListType::class, [
                'label'      => 'mautic.lead.lead.events.campaigns.membership',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required' => true,
            ]);

        \$builder->add(
            'dataAddedLimit',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.lead.lead.events.campaigns.date.added.filter',
                'data'  => \$options['data']['dataAddedLimit'] ?? false,
            ]
        );

        \$builder->add(
            'expr',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.lead.events.campaigns.expression',
                'multiple'          => false,
                'choices'           => \$this->listModel->getOperatorsForFieldType([
                    'include' => [
                        'gt',
                        'lt',
                    ],
                ]),
                'required'   => false,
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'data-show-on' => '{\"campaignevent_properties_dataAddedLimit_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'dateAdded',
            TextType::class,
            [
                'label'      => 'mautic.lead.lead.events.campaigns.date',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'data-toggle'  => 'datetime',
                    'data-show-on' => '{\"campaignevent_properties_dataAddedLimit_1\":\"checked\"}',
                ],
                'required' => false,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'campaignevent_lead_campaigns';
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
        return "@bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php");
    }
}
