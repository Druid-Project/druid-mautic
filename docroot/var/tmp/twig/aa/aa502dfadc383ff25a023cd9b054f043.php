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

/* @bundles/IntegrationsBundle/IntegrationsBundle.php */
class __TwigTemplate_b003c1606354ddb7667a74bbbdb03e78 extends Template
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

namespace Mautic\\IntegrationsBundle;

use Mautic\\IntegrationsBundle\\Bundle\\AbstractPluginBundle;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\AuthenticationIntegrationPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\BuilderIntegrationPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\ConfigIntegrationPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\IntegrationsPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\SyncIntegrationsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class IntegrationsBundle extends AbstractPluginBundle
{
    public function build(ContainerBuilder \$container): void
    {
        \$container->addCompilerPass(new IntegrationsPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new AuthenticationIntegrationPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new SyncIntegrationsPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new ConfigIntegrationPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new BuilderIntegrationPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
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
        return "@bundles/IntegrationsBundle/IntegrationsBundle.php";
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
        return new Source("", "@bundles/IntegrationsBundle/IntegrationsBundle.php", "/app/docroot/app/bundles/IntegrationsBundle/IntegrationsBundle.php");
    }
}
