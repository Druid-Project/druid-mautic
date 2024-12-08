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

/* @bundles/EmailBundle/Form/Type/DashboardSentEmailToContactsWidgetType.php */
class __TwigTemplate_bb5df73c0b16cfe7d1764f911a0a08e1 extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Mautic\\CampaignBundle\\Form\\Type\\CampaignListType;
use Mautic\\LeadBundle\\Form\\Type\\CompanyListType;
use Mautic\\LeadBundle\\Form\\Type\\LeadListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class DashboardSentEmailToContactsWidgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'companyId',
            CompanyListType::class,
            [
                'label'       => 'mautic.email.companyId.filter',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'empty_data'  => '',
                'required'    => false,
                'multiple'    => false,
                'modal_route' => null, // disable \"Add new\" option in ajax lookup
            ]
        );

        \$builder->add(
            'campaignId',
            CampaignListType::class,
            [
                'label'       => 'mautic.email.campaignId.filter',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'empty_data'  => '',
                'placeholder' => '',
                'required'    => false,
                'multiple'    => false,
            ]
        );

        \$builder->add(
            'segmentId',
            LeadListType::class,
            [
                'label'      => 'mautic.email.segmentId.filter',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'empty_data' => '',
                'required'   => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'email_dashboard_sent_email_to_contacts_widget';
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
        return "@bundles/EmailBundle/Form/Type/DashboardSentEmailToContactsWidgetType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/DashboardSentEmailToContactsWidgetType.php", "/app/docroot/app/bundles/EmailBundle/Form/Type/DashboardSentEmailToContactsWidgetType.php");
    }
}
