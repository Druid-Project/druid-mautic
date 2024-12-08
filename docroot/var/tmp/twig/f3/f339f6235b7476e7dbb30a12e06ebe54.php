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

/* @bundles/WebhookBundle/Event/WebhookEvent.php */
class __TwigTemplate_96ec78dc0238af684fc9500b6ed5541d extends Template
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

class WebhookEvent extends CommonEvent
{
    /**
     * @var Webhook
     */
    protected \$entity;

    /**
     * @param bool   \$isNew
     * @param string \$reason
     */
    public function __construct(
        Webhook \$webhook,
        protected \$isNew = false,
        private \$reason = ''
    ) {
        \$this->entity = \$webhook;
    }

    /**
     * Returns the Webhook entity.
     *
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->entity;
    }

    /**
     * Sets the Webhook entity.
     */
    public function setWebhook(Webhook \$webhook): void
    {
        \$this->entity = \$webhook;
    }

    public function setReason(\$reason): void
    {
        \$this->reason = \$reason;
    }

    public function getReason(): string
    {
        return \$this->reason;
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
        return "@bundles/WebhookBundle/Event/WebhookEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookEvent.php", "/app/docroot/app/bundles/WebhookBundle/Event/WebhookEvent.php");
    }
}
