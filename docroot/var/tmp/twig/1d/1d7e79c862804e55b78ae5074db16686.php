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

/* @bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php */
class __TwigTemplate_6297ab724e89542b639058ca71923ed6 extends Template
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

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;
use Psr\\Http\\Message\\ResponseInterface;

class PluginIntegrationRequestEvent extends AbstractPluginIntegrationEvent
{
    private ?ResponseInterface \$response = null;

    /**
     * @param mixed[] \$parameters
     * @param string  \$method
     * @param mixed[] \$settings
     * @param string  \$authType
     */
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private \$url,
        private \$parameters,
        private \$headers,
        private \$method,
        private \$settings,
        private \$authType
    ) {
        \$this->integration = \$integration;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    public function setParameters(array \$parameters): void
    {
        \$this->parameters = \$parameters;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return \$this->method;
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        return \$this->settings;
    }

    /**
     * @return string
     */
    public function getAuthType()
    {
        return \$this->authType;
    }

    public function setResponse(ResponseInterface \$response): void
    {
        \$this->response = \$response;
    }

    public function getResponse(): ResponseInterface
    {
        return \$this->response;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return \$this->headers;
    }

    public function setHeaders(array \$headers): void
    {
        \$this->headers = \$headers;
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
        return "@bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php");
    }
}
