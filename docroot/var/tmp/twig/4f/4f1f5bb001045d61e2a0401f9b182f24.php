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

/* @bundles/PointBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_9e9d5731f2f562c8de117f91e01222e0 extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\PointBundle\\Event as Events;
use Mautic\\PointBundle\\PointEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PointSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PointEvents::POINT_POST_SAVE     => ['onPointPostSave', 0],
            PointEvents::POINT_POST_DELETE   => ['onPointDelete', 0],
            PointEvents::TRIGGER_POST_SAVE   => ['onTriggerPostSave', 0],
            PointEvents::TRIGGER_POST_DELETE => ['onTriggerDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onPointPostSave(Events\\PointEvent \$event): void
    {
        \$point = \$event->getPoint();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'point',
                'object'    => 'point',
                'objectId'  => \$point->getId(),
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
    public function onPointDelete(Events\\PointEvent \$event): void
    {
        \$point = \$event->getPoint();
        \$log   = [
            'bundle'    => 'point',
            'object'    => 'point',
            'objectId'  => \$point->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$point->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Add an entry to the audit log.
     */
    public function onTriggerPostSave(Events\\TriggerEvent \$event): void
    {
        \$trigger = \$event->getTrigger();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'point',
                'object'    => 'trigger',
                'objectId'  => \$trigger->getId(),
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
    public function onTriggerDelete(Events\\TriggerEvent \$event): void
    {
        \$trigger = \$event->getTrigger();
        \$log     = [
            'bundle'    => 'point',
            'object'    => 'trigger',
            'objectId'  => \$trigger->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$trigger->getName()],
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
        return "@bundles/PointBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/PointSubscriber.php", "/app/docroot/app/bundles/PointBundle/EventListener/PointSubscriber.php");
    }
}
