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

/* @bundles/ApiBundle/MauticApiBundle.php */
class __TwigTemplate_9a26b02552e103de23f952cc8180b8e8 extends Template
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

namespace Mautic\\ApiBundle;

use Mautic\\ApiBundle\\DependencyInjection\\Compiler\\SerializerPass;
use Mautic\\ApiBundle\\DependencyInjection\\Factory\\ApiFactory;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticApiBundle extends Bundle
{
    public function build(ContainerBuilder \$container): void
    {
        parent::build(\$container);

        \$container->addCompilerPass(new SerializerPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);

        \$extension = \$container->getExtension('security');
        \$extension->addSecurityListenerFactory(new ApiFactory());
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
        return "@bundles/ApiBundle/MauticApiBundle.php";
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
        return new Source("", "@bundles/ApiBundle/MauticApiBundle.php", "/app/docroot/app/bundles/ApiBundle/MauticApiBundle.php");
    }
}
