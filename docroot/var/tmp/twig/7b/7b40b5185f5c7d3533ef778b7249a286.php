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

/* @bundles/CoreBundle/Test/Container/TestContainer.php */
class __TwigTemplate_0b27d732420dbd2b5d5d638226f9470f extends Template
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

namespace Mautic\\CoreBundle\\Test\\Container;

use Symfony\\Bundle\\FrameworkBundle\\Test\\TestContainer as BaseTestContainer;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class TestContainer extends BaseTestContainer
{
    private ContainerInterface \$publicContainer;

    /**
     * @param ?object \$service
     */
    public function set(string \$id, \$service): void
    {
        \$closure = static function (ContainerInterface \$container) use (\$id, \$service) {
            \$container->services[\$id] = \$service; // @phpstan-ignore-line
            \$container->privates[\$id] = \$service; // @phpstan-ignore-line
        };
        \\Closure::bind(\$closure, null, \$this->publicContainer)(\$this->publicContainer);
    }

    public function setPublicContainer(ContainerInterface \$container): void
    {
        \$this->publicContainer = \$container;
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
        return "@bundles/CoreBundle/Test/Container/TestContainer.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Container/TestContainer.php", "/app/docroot/app/bundles/CoreBundle/Test/Container/TestContainer.php");
    }
}
