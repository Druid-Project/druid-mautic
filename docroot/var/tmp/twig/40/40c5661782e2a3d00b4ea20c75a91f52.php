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

/* @bundles/ApiBundle/EventListener/ClientSubscriber.php */
class __TwigTemplate_5eead9aa1b5764bf0b1d175cd7886834 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\ApiBundle\\ApiEvents;
use Mautic\\ApiBundle\\Event as Events;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ClientSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ApiEvents::CLIENT_POST_SAVE   => ['onClientPostSave', 0],
            ApiEvents::CLIENT_POST_DELETE => ['onClientDelete', 0],
        ];
    }

    /**
     * Add a client change entry to the audit log.
     */
    public function onClientPostSave(Events\\ClientEvent \$event): void
    {
        \$client = \$event->getClient();
        if (!\$details = \$event->getChanges()) {
            return;
        }

        \$log = [
            'bundle'    => 'api',
            'object'    => 'client',
            'objectId'  => \$client->getId(),
            'action'    => (\$event->isNew()) ? 'create' : 'update',
            'details'   => \$details,
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Add a role delete entry to the audit log.
     */
    public function onClientDelete(Events\\ClientEvent \$event): void
    {
        \$client = \$event->getClient();
        \$log    = [
            'bundle'    => 'api',
            'object'    => 'client',
            'objectId'  => \$client->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$client->getName()],
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
        return "@bundles/ApiBundle/EventListener/ClientSubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/ClientSubscriber.php", "/app/docroot/app/bundles/ApiBundle/EventListener/ClientSubscriber.php");
    }
}
