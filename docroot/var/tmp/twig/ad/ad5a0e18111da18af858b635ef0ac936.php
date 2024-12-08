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

/* @bundles/EmailBundle/Form/Type/DashboardEmailsInTimeWidgetType.php */
class __TwigTemplate_8f283cc776a7752b42ee1db49b903c77 extends Template
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class DashboardEmailsInTimeWidgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'flag',
            ChoiceType::class,
            [
                'label'             => 'mautic.email.flag.filter',
                'choices'           => [
                    'mautic.email.flag.sent'                       => '',
                    'mautic.email.flag.opened'                     => 'opened',
                    'mautic.email.flag.failed'                     => 'failed',
                    'mautic.email.flag.sent.and.opened'            => 'sent_and_opened',
                    'mautic.email.flag.sent.and.opened.and.failed' => 'sent_and_opened_and_failed',
                ],
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'empty_data' => '',
                'required'   => false,
            ]
        );

        \$builder->add(
            'companyId',
            CompanyListType::class,
            [
                'label'       => 'mautic.email.companyId.filter',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'placeholder' => '',
                'required'    => false,
                'multiple'    => false,
                'modal_route' => null,
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
                'label'       => 'mautic.email.segmentId.filter',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'placeholder' => '',
                'required'    => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'email_dashboard_emails_in_time_widget';
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
        return "@bundles/EmailBundle/Form/Type/DashboardEmailsInTimeWidgetType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/DashboardEmailsInTimeWidgetType.php", "/app/docroot/app/bundles/EmailBundle/Form/Type/DashboardEmailsInTimeWidgetType.php");
    }
}
