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

/* @bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php */
class __TwigTemplate_e8a88262cd7cdfff1708cf11717e82f3 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

final class TestPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        // Stub Guzzle HTTP client to prevent accidental request to third parties
        \$definition = \$container->getDefinition('mautic.http.client');
        \$definition->setPublic(true)
            ->setFactory([\\Mautic\\CoreBundle\\Test\\Guzzle\\ClientFactory::class, 'stub'])
            ->addArgument(new Reference(\\GuzzleHttp\\Handler\\MockHandler::class));

        \$container->removeAlias(\\Symfony\\Contracts\\HttpClient\\HttpClientInterface::class);
        \$container->register(\\Symfony\\Component\\HttpClient\\MockHttpClient::class, \\Symfony\\Component\\HttpClient\\MockHttpClient::class)->setAutowired(true)->setPublic(true);
        \$container->setAlias(\\Symfony\\Contracts\\HttpClient\\HttpClientInterface::class, \\Symfony\\Component\\HttpClient\\MockHttpClient::class);
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php");
    }
}
