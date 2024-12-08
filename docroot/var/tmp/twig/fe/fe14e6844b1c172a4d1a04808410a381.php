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

/* @bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php */
class __TwigTemplate_786b815326a71f9bb47a3d1bf7351b30 extends Template
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

class SyncIntegrationsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$taggedServices         = \$container->findTaggedServiceIds('mautic.sync_integration');
        \$syncIntegrationsHelper = \$container->findDefinition('mautic.integrations.helper.sync_integrations');

        foreach (\$taggedServices as \$id => \$tags) {
            \$syncIntegrationsHelper->addMethodCall('addIntegration', [new Reference(\$id)]);
        }

        \$taggedServices   = \$container->findTaggedServiceIds('mautic.sync.notification_handler');
        \$handlerContainer = \$container->findDefinition('mautic.integrations.sync.notification.handler_container');

        foreach (\$taggedServices as \$id => \$tags) {
            \$handlerContainer->addMethodCall('registerHandler', [new Reference(\$id)]);
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
        return "@bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php", "/app/docroot/app/bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php");
    }
}
