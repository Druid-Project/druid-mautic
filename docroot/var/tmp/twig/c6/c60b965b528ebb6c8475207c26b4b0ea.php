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

/* @bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php */
class __TwigTemplate_f249682277f7bdfaed9125e54d35ad42 extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\BC;

use Mautic\\PluginBundle\\Entity\\Integration;

trait BcIntegrationSettingsTrait
{
    /**
     * @deprecated Use setIntegrationConfiguration
     */
    public function setIntegrationSettings(Integration \$integration): void
    {
        \$this->setIntegrationConfiguration(\$integration);
    }

    /**
     * @deprecated Use getIntegrationConfiguration
     */
    public function getIntegrationSettings(): ?Integration
    {
        return \$this->hasIntegrationConfiguration() ? \$this->getIntegrationConfiguration() : null;
    }

    /**
     * @deprecated Implement ConfigFormFeaturesInterface instead
     */
    public function getSupportedFeatures(): array
    {
        return [];
    }

    /**
     * @deprecated Required by Mautic\\PluginBundle\\Helper\\IntegrationHelper
     */
    public function getPriority(): int
    {
        return 1;
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
        return "@bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php", "/app/docroot/app/bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php");
    }
}
