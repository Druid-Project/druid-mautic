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

/* @bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php */
class __TwigTemplate_8772323646466528673687a71dde7b79 extends Template
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

use Mautic\\PointBundle\\Form\\Type\\GroupListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class FormSubmitActionPointsChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'operator',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.lead.submitaction.operator',
                'attr'              => ['class' => 'form-control'],
                'label_attr'        => ['class' => 'control-label'],
                'choices'           => [
                    'mautic.lead.lead.submitaction.operator_plus'   => 'plus',
                    'mautic.lead.lead.submitaction.operator_minus'  => 'minus',
                    'mautic.lead.lead.submitaction.operator_times'  => 'times',
                    'mautic.lead.lead.submitaction.operator_divide' => 'divide',
                ],
            ]
        );

        \$default = (empty(\$options['data']['points'])) ? 0 : (int) \$options['data']['points'];
        \$builder->add(
            'points',
            NumberType::class,
            [
                'label'      => 'mautic.lead.lead.submitaction.points',
                'attr'       => ['class' => 'form-control'],
                'label_attr' => ['class' => 'control-label'],
                'scale'      => 0,
                'data'       => \$default,
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

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_submitaction_pointschange';
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
        return "@bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php", "/app/docroot/app/bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php");
    }
}
