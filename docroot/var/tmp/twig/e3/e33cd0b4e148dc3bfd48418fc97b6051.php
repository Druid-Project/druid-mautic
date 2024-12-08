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

/* @bundles/EmailBundle/Event/TransportWebhookEvent.php */
class __TwigTemplate_1f4061289a584fcf71cc3ef7fe4fa8a4 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event triggered when a transport service send Mautic a webhook request.
 */
final class TransportWebhookEvent extends Event
{
    private ?Response \$response = null;

    public function __construct(
        private Request \$request
    ) {
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getResponse(): ?Response
    {
        return \$this->response;
    }

    public function setResponse(Response \$response): void
    {
        \$this->response = \$response;
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
        return "@bundles/EmailBundle/Event/TransportWebhookEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/TransportWebhookEvent.php", "/app/docroot/app/bundles/EmailBundle/Event/TransportWebhookEvent.php");
    }
}
