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

/* @bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php */
class __TwigTemplate_3a073ac0e36a9c47b09175e4b8cda2e1 extends Template
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

class PluginIntegrationAuthCallbackUrlEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @param string \$callbackUrl
     */
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private \$callbackUrl
    ) {
        \$this->integration = \$integration;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return \$this->callbackUrl;
    }

    /**
     * @param string \$callbackUrl
     */
    public function setCallbackUrl(\$callbackUrl): void
    {
        \$this->callbackUrl = \$callbackUrl;

        \$this->stopPropagation();
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
        return "@bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php");
    }
}
