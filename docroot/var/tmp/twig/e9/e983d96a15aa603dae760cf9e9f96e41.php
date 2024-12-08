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

/* @bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php */
class __TwigTemplate_9adf604e505ad2f8f020e5962ebfe915 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class CoreParametersHelperTest extends TestCase
{
    /**
     * @var MockObject|ContainerInterface
     */
    private MockObject \$container;

    protected function setUp(): void
    {
        \$this->container = \$this->createMock(ContainerInterface::class);
    }

    public function testAllReturnsResolvedParameters(): void
    {
        \$this->container->method('hasParameter')
            ->willReturnCallback(
                fn (string \$key) => 'mautic.cache_path' === \$key
            );

        \$this->container->expects(\$this->once())
            ->method('getParameter')
            ->with('mautic.cache_path')
            ->willReturn('/path/to/cache');

        \$all = \$this->getHelper()->all();

        // Assert that a few of the config keys exist
        Assert::assertArrayHasKey('api_enabled', \$all);
        Assert::assertArrayHasKey('cache_path', \$all);
        Assert::assertSame('/path/to/cache', \$all['cache_path']);
        Assert::assertArrayHasKey('log_path', \$all);
    }

    private function getHelper(): CoreParametersHelper
    {
        return new CoreParametersHelper(\$this->container);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php");
    }
}
