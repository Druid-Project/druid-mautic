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

/* @bundles/NotificationBundle/Event/NotificationEvent.php */
class __TwigTemplate_f007a61456abf7be023559e0065e2077 extends Template
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
use Mautic\\NotificationBundle\\Entity\\Notification;

class NotificationEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Notification \$notification, \$isNew = false)
    {
        \$this->entity = \$notification;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Notification entity.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return \$this->entity;
    }

    /**
     * Sets the Notification entity.
     */
    public function setNotification(Notification \$notification): void
    {
        \$this->entity = \$notification;
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
        return "@bundles/NotificationBundle/Event/NotificationEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/NotificationEvent.php", "/app/docroot/app/bundles/NotificationBundle/Event/NotificationEvent.php");
    }
}
