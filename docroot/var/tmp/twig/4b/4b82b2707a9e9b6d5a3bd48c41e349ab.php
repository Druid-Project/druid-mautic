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

/* @bundles/CoreBundle/DependencyInjection/Compiler/TranslationsPass.php */
class __TwigTemplate_db8ceeb29a314eb579ba7afa14c9b418 extends Template
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

use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class TranslationsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        if (!\$container->has('translator')) {
            return;
        }

        \$translator        = \$container->findDefinition('translator');
        \$translatorOptions = \$translator->getArgument(4);

        \$translatorOptions['cache_vary'] = [];

        \$translator->replaceArgument(4, \$translatorOptions);

        \$container->register('translator.decorated', Translator::class)
            ->setDecoratedService('translator', 'translator.decorated.inner', -100)
            ->setArgument(0, new Reference('translator.decorated.inner'));
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/TranslationsPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/TranslationsPass.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Compiler/TranslationsPass.php");
    }
}
