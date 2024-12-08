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

/* @bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php */
class __TwigTemplate_cf10cf93e537a51c828f69e72e6c0660 extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\Interfaces;

use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

interface IntegrationInterface extends UnifiedIntegrationInterface
{
    /**
     * Return the integration's name.
     */
    public function getName(): string;

    public function getDisplayName(): string;

    public function hasIntegrationConfiguration(): bool;

    public function getIntegrationConfiguration(): Integration;

    /**
     * @return mixed
     */
    public function setIntegrationConfiguration(Integration \$integration);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php");
    }
}
