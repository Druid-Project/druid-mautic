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

/* @bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php */
class __TwigTemplate_d18f23eb1e54f71414b916f9e69719f1 extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\ButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 *
 * @extends AbstractType<mixed>
 */
class CampaignEventLeadChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$data = \$options['data']['action'] ?? 'added';
        \$builder->add('action', ButtonGroupType::class, [
            'choices' => [
                'mautic.campaign.form.trigger_leadchanged_added'   => 'added',
                'mautic.campaign.form.trigger_leadchanged_removed' => 'removed',
            ],
            'expanded'          => true,
            'multiple'          => false,
            'label_attr'        => ['class' => 'control-label'],
            'label'             => 'mautic.campaign.form.trigger_leadchanged',
            'placeholder'       => false,
            'required'          => false,
            'data'              => \$data,
        ]);

        \$builder->add('campaigns', CampaignListType::class, [
            'label'      => 'mautic.campaign.form.limittocampaigns',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.campaign.form.limittocampaigns_descr',
            ],
            'required' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'campaignevent_leadchange';
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
        return "@bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php", "/app/docroot/app/bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php");
    }
}
