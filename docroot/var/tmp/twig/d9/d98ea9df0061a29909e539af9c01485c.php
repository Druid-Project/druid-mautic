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

/* @bundles/CampaignBundle/Model/EventModel.php */
class __TwigTemplate_1d927ae615b4ebf620e77d1137dd008e extends Template
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

namespace Mautic\\CampaignBundle\\Model;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Event\\DeleteEvent;
use Mautic\\CoreBundle\\Helper\\Chart\\ChartQuery;
use Mautic\\CoreBundle\\Helper\\Chart\\LineChart;
use Mautic\\CoreBundle\\Model\\FormModel;

/**
 * @extends FormModel<Event>
 */
class EventModel extends FormModel
{
    /**
     * @return \\Mautic\\CampaignBundle\\Entity\\EventRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(Event::class);
    }

    /**
     * @return \\Mautic\\CampaignBundle\\Entity\\CampaignRepository
     */
    public function getCampaignRepository()
    {
        return \$this->em->getRepository(Campaign::class);
    }

    /**
     * @return LeadEventLogRepository
     */
    public function getLeadEventLogRepository()
    {
        return \$this->em->getRepository(LeadEventLog::class);
    }

    public function getPermissionBase(): string
    {
        return 'campaign:campaigns';
    }

    /**
     * Get a specific entity or generate a new one if id is empty.
     */
    public function getEntity(\$id = null): ?Event
    {
        if (null === \$id) {
            return new Event();
        }

        return parent::getEntity(\$id);
    }

    public function deleteEvents(\$currentEvents, \$deletedEvents): void
    {
        \$deletedKeys = [];
        foreach (\$deletedEvents as \$k => \$deleteMe) {
            if (\$deleteMe instanceof Event) {
                \$deleteMe = \$deleteMe->getId();
            }

            if (str_starts_with(\$deleteMe, 'new')) {
                unset(\$deletedEvents[\$k]);
            }

            if (isset(\$currentEvents[\$deleteMe])) {
                unset(\$deletedEvents[\$k]);
            }

            if (isset(\$deletedEvents[\$k])) {
                \$deletedKeys[] = \$deleteMe;
            }
        }

        if (count(\$deletedEvents)) {
            // wipe out any references to these events to prevent restraint violations
            \$this->getRepository()->nullEventRelationships(\$deletedKeys);
            \$this->getRepository()->setEventsAsDeleted(\$deletedEvents);
            \$this->dispatcher->dispatch(new DeleteEvent(\$deletedKeys), CampaignEvents::ON_EVENT_DELETE);
        }
    }

    public function deleteEventsByCampaignId(int \$campaignId): void
    {
        \$eventIds = \$this->getRepository()->getCampaignEventIds(\$campaignId);
        \$this->deleteEventsByEventIds(\$eventIds);
    }

    /**
     * @param string[] \$eventIds
     */
    public function deleteEventsByEventIds(array \$eventIds): void
    {
        \$this->getRepository()->deleteEvents(\$eventIds);
        \$this->dispatcher->dispatch(new DeleteEvent(\$eventIds), CampaignEvents::ON_AFTER_EVENTS_DELETE);
    }

    /**
     * Get line chart data of campaign events.
     *
     * @param string \$unit          {@link php.net/manual/en/function.date.php#refsect1-function.date-parameters}
     * @param string \$dateFormat
     * @param array  \$filter
     * @param bool   \$canViewOthers
     */
    public function getEventLineChartData(\$unit, \\DateTime \$dateFrom, \\DateTime \$dateTo, \$dateFormat = null, \$filter = [], \$canViewOthers = true): array
    {
        \$chart = new LineChart(\$unit, \$dateFrom, \$dateTo, \$dateFormat);
        \$query = new ChartQuery(\$this->em->getConnection(), \$dateFrom, \$dateTo);
        \$q     = \$query->prepareTimeDataQuery('campaign_lead_event_log', 'date_triggered', \$filter);

        if (!\$canViewOthers) {
            \$q->join('t', MAUTIC_TABLE_PREFIX.'campaigns', 'c', 'c.id = t.campaign_id')
                ->andWhere('c.created_by = :userId')
                ->setParameter('userId', \$this->userHelper->getUser()->getId());
        }

        \$data = \$query->loadAndBuildTimeData(\$q);
        \$chart->setDataset(\$this->translator->trans('mautic.campaign.triggered.events'), \$data);

        return \$chart->render();
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
        return "@bundles/CampaignBundle/Model/EventModel.php";
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
        return new Source("", "@bundles/CampaignBundle/Model/EventModel.php", "/app/docroot/app/bundles/CampaignBundle/Model/EventModel.php");
    }
}
