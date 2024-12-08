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

/* @bundles/LeadBundle/Form/Type/CampaignEventPointType.php */
class __TwigTemplate_9618e4d7629752ff50e8146830a8881b extends Template
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

use Mautic\\LeadBundle\\Provider\\TypeOperatorProviderInterface;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use Mautic\\PointBundle\\Form\\Type\\GroupListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<CampaignEventPointType>
 */
class CampaignEventPointType extends AbstractType
{
    public function __construct(
        private TypeOperatorProviderInterface \$typeOperatorProvider
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'operator',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.campaign.event.point_operator',
                'multiple'          => false,
                'choices'           => \$this->typeOperatorProvider->getOperatorsIncluding([
                    OperatorOptions::EQUAL_TO,
                    OperatorOptions::NOT_EQUAL_TO,
                    OperatorOptions::GREATER_THAN,
                    OperatorOptions::LESS_THAN,
                    OperatorOptions::GREATER_THAN_OR_EQUAL,
                    OperatorOptions::LESS_THAN_OR_EQUAL,
                ]),
                'required'   => true,
                'label_attr' => ['class' => 'control-label'],
            ]
        );

        \$builder->add(
            'score',
            NumberType::class,
            [
                'label'      => 'mautic.lead.campaign.event.point_score',
                'attr'       => ['class' => 'form-control'],
                'label_attr' => ['class' => 'control-label'],
                'scale'      => 0,
                'required'   => true,
            ]
        );

        \$builder->add('group', GroupListType::class, [
            'label'            => 'mautic.lead.campaign.event.point_group',
            'label_attr'       => ['class' => 'control-label'],
            'attr'             => [
                'class'    => 'form-control',
                'tooltip'  => 'mautic.lead.campaign.event.point_group.help',
            ],
            'required'         => false,
            'by_reference'     => false,
            'return_entity'    => false,
        ]);
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
        return "@bundles/LeadBundle/Form/Type/CampaignEventPointType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CampaignEventPointType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/CampaignEventPointType.php");
    }
}
