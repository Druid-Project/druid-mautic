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

/* @bundles/UserBundle/EventListener/UserSubscriber.php */
class __TwigTemplate_84667bde485747693f6302d30bace92e extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\UserBundle\\Event as Events;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class UserSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            UserEvents::USER_POST_SAVE   => ['onUserPostSave', 0],
            UserEvents::USER_POST_DELETE => ['onUserDelete', 0],
            UserEvents::ROLE_POST_SAVE   => ['onRolePostSave', 0],
            UserEvents::ROLE_POST_DELETE => ['onRoleDelete', 0],
        ];
    }

    /**
     * Add a user entry to the audit log.
     */
    public function onUserPostSave(Events\\UserEvent \$event): void
    {
        \$user = \$event->getUser();

        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'user',
                'object'    => 'user',
                'objectId'  => \$user->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a user delete entry to the audit log.
     */
    public function onUserDelete(Events\\UserEvent \$event): void
    {
        \$user = \$event->getUser();
        \$log  = [
            'bundle'    => 'user',
            'object'    => 'user',
            'objectId'  => \$user->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$user->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Add a role entry to the audit log.
     */
    public function onRolePostSave(Events\\RoleEvent \$event): void
    {
        \$role = \$event->getRole();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'user',
                'object'    => 'role',
                'objectId'  => \$role->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a role delete entry to the audit log.
     */
    public function onRoleDelete(Events\\RoleEvent \$event): void
    {
        \$role = \$event->getRole();
        \$log  = [
            'bundle'    => 'user',
            'object'    => 'role',
            'objectId'  => \$role->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$role->getName()],
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
        return "@bundles/UserBundle/EventListener/UserSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/UserSubscriber.php", "/app/docroot/app/bundles/UserBundle/EventListener/UserSubscriber.php");
    }
}
