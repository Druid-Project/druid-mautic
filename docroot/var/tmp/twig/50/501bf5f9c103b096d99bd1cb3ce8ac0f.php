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

/* @bundles/ChannelBundle/EventListener/MessageSubscriber.php */
class __TwigTemplate_e5f0aea0db22a3d29bd15e506dc33363 extends Template
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

namespace Mautic\\ChannelBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\MessageEvent;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class MessageSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::MESSAGE_POST_SAVE   => ['onPostSave', 0],
            ChannelEvents::MESSAGE_POST_DELETE => ['onDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onPostSave(MessageEvent \$event): void
    {
        \$entity = \$event->getMessage();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'   => 'channel',
                'object'   => 'message',
                'objectId' => \$entity->getId(),
                'action'   => (\$event->isNew()) ? 'create' : 'update',
                'details'  => \$details,
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onDelete(MessageEvent \$event): void
    {
        \$entity = \$event->getMessage();
        \$log    = [
            'bundle'   => 'channel',
            'object'   => 'message',
            'objectId' => \$entity->deletedId,
            'action'   => 'delete',
            'details'  => ['name' => \$entity->getName()],
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
        return "@bundles/ChannelBundle/EventListener/MessageSubscriber.php";
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
        return new Source("", "@bundles/ChannelBundle/EventListener/MessageSubscriber.php", "/app/docroot/app/bundles/ChannelBundle/EventListener/MessageSubscriber.php");
    }
}
