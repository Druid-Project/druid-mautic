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

/* @bundles/LeadBundle/EventListener/SegmentSubscriber.php */
class __TwigTemplate_3440618e9f4b52bd3e0b25ccb4ec74b1 extends Template
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

use Mautic\\CoreBundle\\Exception\\RecordNotUnpublishedException;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Event\\LeadListEvent as SegmentEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Validator\\SegmentUsedInCampaignsValidator;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class SegmentSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel,
        private ListModel \$listModel,
        private SegmentUsedInCampaignsValidator \$segmentUsedInCampaignsValidator,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::LIST_POST_SAVE     => ['onSegmentPostSave', 0],
            LeadEvents::LIST_POST_DELETE   => ['onSegmentDelete', 0],
            LeadEvents::LIST_PRE_UNPUBLISH => [
                ['validateSegmentFilters', 0],
                ['validateSegmentsUsedInCampaigns', 0],
            ],
        ];
    }

    /**
     * Add a segment entry to the audit log.
     */
    public function onSegmentPostSave(SegmentEvent \$event): void
    {
        \$segment = \$event->getList();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'lead',
                'object'    => 'segment',
                'objectId'  => \$segment->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * @throws RecordNotUnpublishedException
     */
    public function validateSegmentFilters(SegmentEvent \$event): void
    {
        \$leadList = \$event->getList();
        \$lists    = \$this->listModel->getSegmentsWithDependenciesOnSegment(\$leadList->getId(), 'name');
        if (count(\$lists)) {
            \$message = \$this->translator->trans('mautic.lead_list.is_in_use', ['%segments%' => implode(',', \$lists)], 'validators');
            throw new RecordNotUnpublishedException(\$message);
        }
    }

    /**
     * Add a segment delete entry to the audit log.
     */
    public function onSegmentDelete(SegmentEvent \$event): void
    {
        \$segment = \$event->getList();
        \$log     = [
            'bundle'    => 'lead',
            'object'    => 'segment',
            'objectId'  => \$segment->deletedId,
            'action'    => 'delete',
            'details'   => ['name', \$segment->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * @throws RecordNotUnpublishedException
     */
    public function validateSegmentsUsedInCampaigns(SegmentEvent \$event): void
    {
        \$this->segmentUsedInCampaignsValidator->validate(\$event->getList());
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
        return "@bundles/LeadBundle/EventListener/SegmentSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SegmentSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/SegmentSubscriber.php");
    }
}
