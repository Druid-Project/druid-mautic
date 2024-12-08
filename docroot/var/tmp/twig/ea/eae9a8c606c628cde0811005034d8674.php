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

/* @bundles/IntegrationsBundle/Event/KeysDecryptionEvent.php */
class __TwigTemplate_74088f4fa55110572e1f068e1515d266 extends Template
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

class KeysDecryptionEvent extends Event
{
    public function __construct(
        private Integration \$integrationConfiguration,
        private array \$keys
    ) {
    }

    public function getIntegrationConfiguration(): Integration
    {
        return \$this->integrationConfiguration;
    }

    public function getKeys(): array
    {
        return \$this->keys;
    }

    public function setKeys(array \$keys): void
    {
        \$this->keys = \$keys;
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
        return "@bundles/IntegrationsBundle/Event/KeysDecryptionEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/KeysDecryptionEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/KeysDecryptionEvent.php");
    }
}
