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

/* @bundles/WebhookBundle/Event/WebhookQueueEvent.php */
class __TwigTemplate_e65c6859f716677e0b7a5f4d7eda848b extends Template
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

namespace Mautic\\WebhookBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Entity\\WebhookQueue;

class WebhookQueueEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(
        WebhookQueue \$webhookQueue,
        protected Webhook \$webhook,
        \$isNew = false
    ) {
        \$this->entity  = \$webhookQueue;
        \$this->isNew   = \$isNew;
    }

    /**
     * Returns the WebhookQueue entity.
     *
     * @return WebhookQueue
     */
    public function getWebhookQueue()
    {
        return \$this->entity;
    }

    /**
     * Sets the WebhookQueue entity.
     */
    public function setWebhookQueue(WebhookQueue \$webhookQueue): void
    {
        \$this->entity = \$webhookQueue;
    }

    /**
     * Returns the Webhook entity.
     *
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->webhook;
    }

    /**
     * Sets the Webhook entity.
     */
    public function setWebhook(Webhook \$webhook): void
    {
        \$this->webhook = \$webhook;
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
        return "@bundles/WebhookBundle/Event/WebhookQueueEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookQueueEvent.php", "/app/docroot/app/bundles/WebhookBundle/Event/WebhookQueueEvent.php");
    }
}
