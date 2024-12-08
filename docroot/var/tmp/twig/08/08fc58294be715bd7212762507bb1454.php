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

/* @bundles/ApiBundle/DependencyInjection/Compiler/SerializerPass.php */
class __TwigTemplate_cb8e615d07650e9a3b9edc6d8e1a345b extends Template
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

namespace Mautic\\ApiBundle\\DependencyInjection\\Compiler;

use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class SerializerPass implements CompilerPassInterface
{
    /**
     * Replaces the available metadata drivers (yaml, xml, and annotation)
     * with our metadata driver, as we do not use any of those. There's
     * currently no other way that I can find to get our driver into the
     * chain in front of the rest.
     */
    public function process(ContainerBuilder \$container): void
    {
        if (\$container->hasDefinition('jms_serializer.metadata.doctrine_type_driver')) {
            \$definition = \$container->getDefinition('jms_serializer.metadata.doctrine_type_driver');
            \$definition->replaceArgument(0, new Reference(ApiMetadataDriver::class));
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
        return "@bundles/ApiBundle/DependencyInjection/Compiler/SerializerPass.php";
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
        return new Source("", "@bundles/ApiBundle/DependencyInjection/Compiler/SerializerPass.php", "/app/docroot/app/bundles/ApiBundle/DependencyInjection/Compiler/SerializerPass.php");
    }
}
