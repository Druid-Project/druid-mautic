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

/* @bundles/LeadBundle/EventListener/ContactExportAuditLogSubscriber.php */
class __TwigTemplate_feeb7c3febe6d54d77caeb9c53d39078 extends Template
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
use Mautic\\LeadBundle\\Event\\ContactExportEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ContactExportAuditLogSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AuditLogModel \$auditLogModel,
        private IpLookupHelper \$ipLookupHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::POST_CONTACT_EXPORT  => 'onContactExport',
        ];
    }

    public function onContactExport(ContactExportEvent \$event): void
    {
        \$this->auditLogModel->writeToLog(
            [
                'bundle'    => 'lead',
                'object'    => \$event->getObject(),
                'objectId'  => 0,
                'action'    => 'create',
                'details'   => \$event->getArgs(),
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
        return "@bundles/LeadBundle/EventListener/ContactExportAuditLogSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportAuditLogSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ContactExportAuditLogSubscriber.php");
    }
}
