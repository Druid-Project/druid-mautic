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

/* @bundles/NotificationBundle/Event/SendingNotificationEvent.php */
class __TwigTemplate_cdb53e98f487b9e4927bb23c162c51d1 extends Template
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

namespace Mautic\\NotificationBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\NotificationBundle\\Entity\\Notification;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class SendingNotificationEvent extends CommonEvent
{
    /**
     * @var Notification
     */
    protected \$entity;

    public function __construct(
        Notification \$notification,
        protected Lead \$lead
    ) {
        \$this->entity = \$notification;
    }

    /**
     * @return Notification
     */
    public function getNotification()
    {
        return \$this->entity;
    }

    /**
     * @return \$this
     */
    public function setNotifiction(Notification \$notification)
    {
        \$this->entity = \$notification;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return \$this
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
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
        return "@bundles/NotificationBundle/Event/SendingNotificationEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/SendingNotificationEvent.php", "/app/docroot/app/bundles/NotificationBundle/Event/SendingNotificationEvent.php");
    }
}
