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

/* @bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php */
class __TwigTemplate_1670761d7ff294bd3dc2f3964034a4eb extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ContactExportSchedulerAuditLogSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AuditLogModel \$auditLogModel,
        private IpLookupHelper \$ipLookupHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::POST_CONTACT_EXPORT_SCHEDULED  => 'onContactExportScheduled',
            LeadEvents::POST_CONTACT_EXPORT_SEND_EMAIL => 'onContactExportEmailSent',
        ];
    }

    public function onContactExportScheduled(ContactExportSchedulerEvent \$event): void
    {
        \$this->auditLogModel->writeToLog(
            [
                'bundle'    => 'lead',
                'object'    => 'ContactExportScheduler',
                'objectId'  => \$event->getContactExportScheduler()->getId(),
                'action'    => 'create',
                'details'   => \$event->getContactExportScheduler()->getChanges(),
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ]
        );
    }

    public function onContactExportEmailSent(ContactExportSchedulerEvent \$event): void
    {
        \$this->auditLogModel->writeToLog(
            [
                'bundle'    => 'lead',
                'object'    => 'ContactExportScheduler',
                'objectId'  => \$event->getContactExportScheduler()->getId(),
                'action'    => 'sendEmail',
                'details'   => \$event->getContactExportScheduler()->getChanges(),
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ]
        );
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
        return "@bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php");
    }
}
