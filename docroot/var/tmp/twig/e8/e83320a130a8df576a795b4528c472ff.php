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

/* @bundles/LeadBundle/EventListener/SegmentReportSubscriber.php */
class __TwigTemplate_514499ae7a0b1921f0b3e55ab1de90be extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\LeadBundle\\Report\\FieldsBuilder;
use Mautic\\ReportBundle\\Event\\ReportBuilderEvent;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SegmentReportSubscriber implements EventSubscriberInterface
{
    public const SEGMENT_MEMBERSHIP = 'segment.membership';

    public function __construct(
        private FieldsBuilder \$fieldsBuilder
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ReportEvents::REPORT_ON_BUILD    => ['onReportBuilder', 0],
            ReportEvents::REPORT_ON_GENERATE => ['onReportGenerate', 0],
        ];
    }

    /**
     * Add available tables and columns to the report builder lookup.
     */
    public function onReportBuilder(ReportBuilderEvent \$event): void
    {
        if (!\$event->checkContext([self::SEGMENT_MEMBERSHIP])) {
            return;
        }

        \$columns = \$this->fieldsBuilder->getLeadFieldsColumns('l.');

        \$filters = \$this->fieldsBuilder->getLeadFilter('l.', 'lll.');

        \$segmentColumns = [
            'lll.manually_removed' => [
                'label' => 'mautic.lead.report.segment.manually_removed',
                'type'  => 'bool',
            ],
            'lll.manually_added' => [
                'label' => 'mautic.lead.report.segment.manually_added',
                'type'  => 'bool',
            ],
        ];

        \$data = [
            'display_name' => 'mautic.lead.report.segment.membership',
            'columns'      => array_merge(\$columns, \$segmentColumns, \$event->getStandardColumns('s.', ['publish_up', 'publish_down'])),
            'filters'      => \$filters,
        ];
        \$event->addTable(self::SEGMENT_MEMBERSHIP, \$data, ReportSubscriber::GROUP_CONTACTS);

        unset(\$columns, \$filters, \$segmentColumns, \$data);
    }

    /**
     * Initialize the QueryBuilder object to generate reports from.
     */
    public function onReportGenerate(ReportGeneratorEvent \$event): void
    {
        if (!\$event->checkContext([self::SEGMENT_MEMBERSHIP])) {
            return;
        }

        \$qb = \$event->getQueryBuilder();
        \$qb->from(MAUTIC_TABLE_PREFIX.'lead_lists_leads', 'lll')
            ->leftJoin('lll', MAUTIC_TABLE_PREFIX.'leads', 'l', 'l.id = lll.lead_id')
            ->leftJoin('lll', MAUTIC_TABLE_PREFIX.'lead_lists', 's', 's.id = lll.leadlist_id')
            ->andWhere('lll.manually_removed = 0');

        if (\$event->usesColumn(['u.first_name', 'u.last_name'])) {
            \$qb->leftJoin('l', MAUTIC_TABLE_PREFIX.'users', 'u', 'u.id = l.owner_id');
        }

        if (\$event->usesColumn('i.ip_address')) {
            \$event->addLeadIpAddressLeftJoin(\$qb);
        }

        \$event->setQueryBuilder(\$qb);
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
        return "@bundles/LeadBundle/EventListener/SegmentReportSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SegmentReportSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/SegmentReportSubscriber.php");
    }
}
