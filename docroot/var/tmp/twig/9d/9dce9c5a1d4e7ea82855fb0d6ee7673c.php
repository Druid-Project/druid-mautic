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

/* @bundles/StageBundle/EventListener/StageSubscriber.php */
class __TwigTemplate_0b11226bdc176d52a93b95f89b9c918f extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\StageBundle\\Event as Events;
use Mautic\\StageBundle\\StageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class StageSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            StageEvents::STAGE_POST_SAVE   => ['onStagePostSave', 0],
            StageEvents::STAGE_POST_DELETE => ['onStageDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onStagePostSave(Events\\StageEvent \$event): void
    {
        \$stage = \$event->getStage();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'stage',
                'object'    => 'stage',
                'objectId'  => \$stage->getId(),
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
    public function onStageDelete(Events\\StageEvent \$event): void
    {
        \$stage = \$event->getStage();
        \$log   = [
            'bundle'    => 'stage',
            'object'    => 'stage',
            'objectId'  => \$stage->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$stage->getName()],
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
        return "@bundles/StageBundle/EventListener/StageSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/StageSubscriber.php", "/app/docroot/app/bundles/StageBundle/EventListener/StageSubscriber.php");
    }
}
