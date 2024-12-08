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

/* @bundles/CampaignBundle/Executioner/Helper/InactiveHelper.php */
class __TwigTemplate_12322a94ae72ac8b8819e380330e19e7 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Helper;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\EventRepository;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\InactiveContactFinder;
use Mautic\\CampaignBundle\\Executioner\\Exception\\DecisionNotApplicableException;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\EventScheduler;
use Psr\\Log\\LoggerInterface;

class InactiveHelper
{
    private ?\\DateTimeInterface \$earliestInactiveDate = null;

    public function __construct(
        private EventScheduler \$scheduler,
        private InactiveContactFinder \$inactiveContactFinder,
        private LeadEventLogRepository \$eventLogRepository,
        private EventRepository \$eventRepository,
        private LoggerInterface \$logger,
        private DecisionHelper \$decisionHelper
    ) {
    }

    /**
     * @param ArrayCollection<int, Event> \$decisions
     */
    public function removeDecisionsWithoutNegativeChildren(ArrayCollection \$decisions): void
    {
        /**
         * @var int   \$key
         * @var Event \$decision
         */
        foreach (\$decisions as \$key => \$decision) {
            \$negativeChildren = \$decision->getNegativeChildren();
            if (!\$negativeChildren->count()) {
                \$decisions->remove(\$key);
            }
        }
    }

    /**
     * @param int \$lastActiveEventId
     *
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotSchedulableException
     */
    public function removeContactsThatAreNotApplicable(
        \\DateTime \$now,
        ArrayCollection \$contacts,
        \$lastActiveEventId,
        ArrayCollection \$negativeChildren,
        Event \$event
    ): void {
        \$contactIds                 = \$contacts->getKeys();
        \$lastActiveDates            = \$this->getLastActiveDates(\$lastActiveEventId, \$contactIds);
        \$this->earliestInactiveDate = \$now;

        foreach (\$contactIds as \$contactId) {
            try {
                \$this->decisionHelper->checkIsDecisionApplicableForContact(\$event, \$contacts->get(\$contactId));
            } catch (DecisionNotApplicableException \$e) {
                \$this->logger->debug(\$e->getMessage());
                \$contacts->remove(\$contactId);
                continue;
            }

            if (!isset(\$lastActiveDates[\$contactId])) {
                // This contact does not have a last active date so likely the event is scheduled
                \$contacts->remove(\$contactId);

                \$this->logger->debug('CAMPAIGN: Contact ID# '.\$contactId.' does not have a last active date ('.\$lastActiveEventId.')');

                continue;
            }

            \$earliestContactInactiveDate = \$this->getEarliestInactiveDate(\$negativeChildren, \$lastActiveDates[\$contactId]);
            \$this->logger->debug(
                'CAMPAIGN: Earliest date for inactivity for contact ID# '.\$contactId.' is '.
                \$earliestContactInactiveDate->format('Y-m-d H:i:s T').' based on last active date of '.
                \$lastActiveDates[\$contactId]->format('Y-m-d H:i:s T')
            );

            if (\$this->earliestInactiveDate < \$earliestContactInactiveDate) {
                \$this->earliestInactiveDate = \$earliestContactInactiveDate;
            }

            // If any are found to be inactive, we process or schedule all the events associated with the inactive path of a decision
            if (\$earliestContactInactiveDate > \$now) {
                \$contacts->remove(\$contactId);
                \$this->logger->debug('CAMPAIGN: Contact ID# '.\$contactId.' has been active and thus not applicable');

                continue;
            }

            \$this->logger->debug('CAMPAIGN: Contact ID# '.\$contactId.' has not been active');
        }
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getEarliestInactiveDateTime()
    {
        return \$this->earliestInactiveDate;
    }

    public function getCollectionByDecisionId(\$decisionId): ArrayCollection
    {
        \$collection = new ArrayCollection();

        /** @var Event|null \$decision */
        \$decision = \$this->eventRepository->find(\$decisionId);
        if (\$decision && !\$decision->isDeleted()) {
            \$collection->set(\$decision->getId(), \$decision);
        }

        return \$collection;
    }

    /**
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotSchedulableException
     */
    public function getEarliestInactiveDate(ArrayCollection \$negativeChildren, \\DateTimeInterface \$lastActiveDate): ?\\DateTimeInterface
    {
        \$earliestDate = null;
        foreach (\$negativeChildren as \$event) {
            \$executionDate = \$this->scheduler->getExecutionDateTime(\$event, \$lastActiveDate);
            if (!\$earliestDate || \$executionDate < \$earliestDate) {
                \$earliestDate = \$executionDate;
            }
        }

        return \$earliestDate;
    }

    /**
     * @return array<string, \\DateTimeInterface>|null
     */
    private function getLastActiveDates(\$lastActiveEventId, array \$contactIds): ?array
    {
        // If there is a parent ID, get last active dates based on when that event was executed for the given contact
        // Otherwise, use when the contact was added to the campaign for comparison
        if (\$lastActiveEventId) {
            return \$this->eventLogRepository->getDatesExecuted(\$lastActiveEventId, \$contactIds);
        }

        return \$this->inactiveContactFinder->getDatesAdded();
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
        return "@bundles/CampaignBundle/Executioner/Helper/InactiveHelper.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Helper/InactiveHelper.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Helper/InactiveHelper.php");
    }
}
