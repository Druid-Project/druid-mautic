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

/* @bundles/ReportBundle/EventListener/ReportSubscriber.php */
class __TwigTemplate_ec6797e93d0c25c8da928ad4665a3928 extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\ReportBundle\\Event\\ReportEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReportSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ReportEvents::REPORT_POST_SAVE   => ['onReportPostSave', 0],
            ReportEvents::REPORT_POST_DELETE => ['onReportDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onReportPostSave(ReportEvent \$event): void
    {
        \$report = \$event->getReport();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'report',
                'object'    => 'report',
                'objectId'  => \$report->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onReportDelete(ReportEvent \$event): void
    {
        \$report = \$event->getReport();
        \$log    = [
            'bundle'    => 'report',
            'object'    => 'report',
            'objectId'  => \$report->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$report->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
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
        return "@bundles/ReportBundle/EventListener/ReportSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/ReportSubscriber.php", "/app/docroot/app/bundles/ReportBundle/EventListener/ReportSubscriber.php");
    }
}
