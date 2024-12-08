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

/* @bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php */
class __TwigTemplate_34f91420516033bbcd73b6e68f6b0573 extends Template
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
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\AuthenticationInterface;
use Mautic\\PluginBundle\\Entity\\Integration;

class AuthIntegrationsHelper
{
    /**
     * @var AuthenticationInterface[]
     */
    private array \$integrations = [];

    public function __construct(
        private IntegrationsHelper \$integrationsHelper
    ) {
    }

    public function addIntegration(AuthenticationInterface \$integration): void
    {
        \$this->integrations[\$integration->getName()] = \$integration;
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function getIntegration(string \$integration): AuthenticationInterface
    {
        if (!isset(\$this->integrations[\$integration])) {
            throw new IntegrationNotFoundException(\"\$integration either doesn't exist or has not been tagged with mautic.authentication_integration\");
        }

        // Ensure the configuration is hydrated
        \$this->integrationsHelper->getIntegrationConfiguration(\$this->integrations[\$integration]);

        return \$this->integrations[\$integration];
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
        return "@bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php");
    }
}
