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

/* @bundles/LeadBundle/Segment/Stat/SegmentDependencies.php */
class __TwigTemplate_edd7884d6fa3f7a3a3db3bdc0874f13e extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Stat;

use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\FormBundle\\Model\\ActionModel;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\PointBundle\\Model\\TriggerEventModel;
use Mautic\\ReportBundle\\Model\\ReportModel;

class SegmentDependencies
{
    public function __construct(
        private EmailModel \$emailModel,
        private CampaignModel \$campaignModel,
        private ActionModel \$actionModel,
        private ListModel \$listModel,
        private TriggerEventModel \$triggerEventModel,
        private ReportModel \$reportModel
    ) {
    }

    public function getChannelsIds(\$segmentId): array
    {
        \$usage   = [];
        \$usage[] = [
            'label' => 'mautic.email.emails',
            'route' => 'mautic_email_index',
            'ids'   => \$this->emailModel->getEmailsIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.campaign.campaigns',
            'route' => 'mautic_campaign_index',
            'ids'   => \$this->campaignModel->getCampaignIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.lead.lead.lists',
            'route' => 'mautic_segment_index',
            'ids'   => \$this->listModel->getSegmentsWithDependenciesOnSegment(\$segmentId, 'id'),
        ];

        \$usage[] = [
            'label' => 'mautic.report.reports',
            'route' => 'mautic_report_index',
            'ids'   => \$this->reportModel->getReportsIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.form.forms',
            'route' => 'mautic_form_index',
            'ids'   => \$this->actionModel->getFormsIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.point.trigger.header.index',
            'route' => 'mautic_pointtrigger_index',
            'ids'   => \$this->triggerEventModel->getReportIdsWithDependenciesOnSegment(\$segmentId),
        ];

        return \$usage;
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
        return "@bundles/LeadBundle/Segment/Stat/SegmentDependencies.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentDependencies.php", "/app/docroot/app/bundles/LeadBundle/Segment/Stat/SegmentDependencies.php");
    }
}
