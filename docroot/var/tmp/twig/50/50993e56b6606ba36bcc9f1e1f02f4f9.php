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

/* @bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php */
class __TwigTemplate_f7ad6ca984339a60ef5bf1c913001e4b extends Template
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

namespace Mautic\\ApiBundle\\DependencyInjection\\Factory;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SecurityFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ApiFactory implements SecurityFactoryInterface
{
    public function create(ContainerBuilder \$container, string \$id, array \$config, string \$userProvider, ?string \$defaultEntryPoint): array
    {
        \$providerId = 'security.authentication.provider.mautic_api.'.\$id;
        \$container
            ->setDefinition(\$providerId, new ChildDefinition('mautic_api.security.authentication.provider'))
            ->replaceArgument(0, new Reference(\$userProvider));

        \$listenerId = 'security.authentication.listener.mautic_api.'.\$id;
        \$container->setDefinition(\$listenerId, new ChildDefinition('mautic_api.security.authentication.listener'));

        return [\$providerId, \$listenerId, \$defaultEntryPoint];
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'mautic_api_auth';
    }

    public function addConfiguration(NodeDefinition \$node): void
    {
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
        return "@bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php";
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
        return new Source("", "@bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php", "/app/docroot/app/bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php");
    }
}
