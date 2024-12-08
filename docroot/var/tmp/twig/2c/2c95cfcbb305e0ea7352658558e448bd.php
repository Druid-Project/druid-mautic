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

/* @bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php */
class __TwigTemplate_6b4f7156d4cfac2ccef3c7b67767b681 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ModelPass implements CompilerPassInterface
{
    public const TAG = 'mautic.model';

    public function process(ContainerBuilder \$container): void
    {
        \$modelServices = [];
        foreach (\$container->findTaggedServiceIds(self::TAG) as \$id => \$tags) {
            \$modelServices[\$id] = new Reference(\$id);

            // because aliases are not tagged we need to inject them too.
            // @see https://github.com/symfony/symfony/issues/17256
            foreach (\$container->getAliases() as \$aliasId => \$alias) {
                \$aliasedId = (string) \$alias;
                if (\$aliasedId !== \$id) {
                    continue;
                }

                \$modelServices[\$aliasId] = new Reference(\$aliasedId);
            }
        }

        \$myService = \$container->findDefinition(ModelFactory::class);

        \$myService->addArgument(ServiceLocatorTagPass::register(\$container, \$modelServices));
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php");
    }
}
