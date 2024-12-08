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

/* @bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php */
class __TwigTemplate_9fc7cf22bfde177dbb3dfa3457747019 extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\BuilderInterface;
use Mautic\\PluginBundle\\Entity\\Integration;

class BuilderIntegrationsHelper
{
    /**
     * @var BuilderInterface[]
     */
    private array \$builders = [];

    public function __construct(
        private IntegrationsHelper \$integrationsHelper
    ) {
    }

    /**
     * Returns the first enabled builder that supports the given feature.
     *
     * @throws IntegrationNotFoundException
     */
    public function getBuilder(string \$feature): BuilderInterface
    {
        foreach (\$this->builders as \$builder) {
            // Ensure the configuration is hydrated
            \$this->integrationsHelper->getIntegrationConfiguration(\$builder);

            if (\$builder->isSupported(\$feature) && \$builder->getIntegrationConfiguration()->getIsPublished()) {
                return \$builder;
            }
        }

        throw new IntegrationNotFoundException();
    }

    public function getBuilderNames(): array
    {
        \$names = [];
        foreach (\$this->builders as \$builder) {
            \$names[\$builder->getName()] = \$builder->getDisplayName();
        }

        return \$names;
    }

    public function addIntegration(BuilderInterface \$integration): void
    {
        \$this->builders[\$integration->getName()] = \$integration;
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function getIntegration(string \$integration): BuilderInterface
    {
        if (!isset(\$this->builders[\$integration])) {
            throw new IntegrationNotFoundException(\"\$integration either doesn't exist or has not been tagged with mautic.builder_integration\");
        }

        // Ensure the configuration is hydrated
        \$this->integrationsHelper->getIntegrationConfiguration(\$this->builders[\$integration]);

        return \$this->builders[\$integration];
    }

    public function saveIntegrationConfiguration(Integration \$integrationConfiguration): void
    {
        \$this->integrationsHelper->saveIntegrationConfiguration(\$integrationConfiguration);
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
        return "@bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php");
    }
}
