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

/* @bundles/IntegrationsBundle/DependencyInjection/Compiler/BuilderIntegrationPass.php */
class __TwigTemplate_9624507d439dd00ee557a75c1417b975 extends Template
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

namespace Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class BuilderIntegrationPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$taggedServices     = \$container->findTaggedServiceIds('mautic.builder_integration');
        \$integrationsHelper = \$container->findDefinition('mautic.integrations.helper.builder_integrations');

        foreach (\$taggedServices as \$id => \$tags) {
            \$integrationsHelper->addMethodCall('addIntegration', [new Reference(\$id)]);
        }
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
        return "@bundles/IntegrationsBundle/DependencyInjection/Compiler/BuilderIntegrationPass.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DependencyInjection/Compiler/BuilderIntegrationPass.php", "/app/docroot/app/bundles/IntegrationsBundle/DependencyInjection/Compiler/BuilderIntegrationPass.php");
    }
}
