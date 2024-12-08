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

/* @bundles/IntegrationsBundle/Event/KeysSaveEvent.php */
class __TwigTemplate_8ef017185f6d02e1a02e6a6eca8957bf extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class KeysSaveEvent extends Event
{
    /**
     * @var array<string,string>
     */
    private array \$newKeys;

    /**
     * @param array<string,string> \$oldKeys
     */
    public function __construct(private Integration \$integrationConfiguration, private array \$oldKeys)
    {
        \$this->newKeys = \$integrationConfiguration->getApiKeys();
    }

    public function getIntegrationConfiguration(): Integration
    {
        return \$this->integrationConfiguration;
    }

    /**
     * @return array<string,string>
     */
    public function getOldKeys(): array
    {
        return \$this->oldKeys;
    }

    /**
     * @return array<string,string>
     */
    public function getNewKeys(): array
    {
        return \$this->newKeys;
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
        return "@bundles/IntegrationsBundle/Event/KeysSaveEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/KeysSaveEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/KeysSaveEvent.php");
    }
}
