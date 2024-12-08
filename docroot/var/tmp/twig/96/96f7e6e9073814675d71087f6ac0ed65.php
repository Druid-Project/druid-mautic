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

/* @bundles/WebhookBundle/Event/WebhookRequestEvent.php */
class __TwigTemplate_accc17f085ca1c79d9c7808d895a9c6d extends Template
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

namespace Mautic\\WebhookBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class WebhookRequestEvent extends Event
{
    public function __construct(
        private Lead \$contact,
        private string \$url,
        private array \$headers,
        private array \$payload
    ) {
    }

    public function getUrl(): string
    {
        return \$this->url;
    }

    public function setUrl(string \$url): void
    {
        \$this->url = \$url;
    }

    public function getHeaders(): array
    {
        return \$this->headers;
    }

    public function setHeaders(array \$headers): void
    {
        \$this->headers = \$headers;
    }

    public function getPayload(): array
    {
        return \$this->payload;
    }

    public function setPayload(array \$payload): void
    {
        \$this->payload = \$payload;
    }

    public function getContact(): Lead
    {
        return \$this->contact;
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
        return "@bundles/WebhookBundle/Event/WebhookRequestEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookRequestEvent.php", "/app/docroot/app/bundles/WebhookBundle/Event/WebhookRequestEvent.php");
    }
}
