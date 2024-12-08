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

/* @bundles/CoreBundle/DependencyInjection/Compiler/TranslationLoaderPass.php */
class __TwigTemplate_684af3315bb2d582acdc73f46e288bfd extends Template
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

use Mautic\\CoreBundle\\Translation\\TranslatorLoader;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class TranslationLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        if (!\$container->has('translator.default')) {
            return;
        }

        \$translatorLoader = \$container->getDefinition('translator.default');
        \$translatorLoader->setClass(TranslatorLoader::class)
            ->setPublic(true);

        if (MAUTIC_ENV === 'prod') {
            return;
        }

        // Disable cache for dev and test environments
        \$translatorOptions              = \$translatorLoader->getArgument(4);
        \$translatorOptions['cache_dir'] = null;
        \$translatorLoader->replaceArgument(4, \$translatorOptions);
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/TranslationLoaderPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/TranslationLoaderPass.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Compiler/TranslationLoaderPass.php");
    }
}
