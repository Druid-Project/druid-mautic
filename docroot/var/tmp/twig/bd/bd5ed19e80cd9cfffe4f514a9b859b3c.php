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

/* @bundles/CacheBundle/Tests/Cache/CacheProviderTest.php */
class __TwigTemplate_b0bdeb428703a0a5c05ae56f6a35766e extends Template
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

namespace Mautic\\CacheBundle\\Tests\\Cache;

use Mautic\\CacheBundle\\Cache\\Adapter\\FilesystemTagAwareAdapter;
use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Psr16Cache;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class CacheProviderTest extends TestCase
{
    private CacheProvider \$cacheProvider;

    /**
     * @var MockObject|FilesystemTagAwareAdapter
     */
    private MockObject \$adapter;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private MockObject \$coreParametersHelper;

    /**
     * @var MockObject|ContainerInterface
     */
    private MockObject \$container;

    public function setUp(): void
    {
        parent::setUp();
        \$this->adapter              = \$this->createMock(FilesystemTagAwareAdapter::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->container            = \$this->createMock(ContainerInterface::class);
        \$this->cacheProvider        = new CacheProvider(\$this->coreParametersHelper, \$this->container);
    }

    public function testRequestedCacheAdaptorIsReturned(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('foo.bar');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('foo.bar')
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with('foo.bar')
            ->willReturn(\$this->adapter);

        \$this->assertEquals(\$this->cacheProvider->getCacheAdapter(), \$this->adapter);
    }

    public function testSimplePsrCacheIsReturned(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('foo.bar');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('foo.bar')
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with('foo.bar')
            ->willReturn(\$this->adapter);

        \$simpleCache = \$this->cacheProvider->getSimpleCache();
        \$this->assertInstanceOf(Psr16Cache::class, \$simpleCache);
    }

    public function testExceptionThrownIfAdaptorNotFoundInContainer(): void
    {
        \$this->expectException(InvalidArgumentException::class);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('bar.foo');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('bar.foo')
            ->willReturn(false);

        \$this->container->expects(\$this->never())
            ->method('get');

        \$this->cacheProvider->getCacheAdapter();
    }

    public function testExceptionThrownIfAdaptorEmpty(): void
    {
        \$this->expectException(InvalidArgumentException::class);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn(null);

        \$this->container->expects(\$this->never())
            ->method('has');

        \$this->container->expects(\$this->never())
            ->method('get');

        \$this->cacheProvider->getCacheAdapter();
    }

    public function testExceptionThrownIfAdaptorNotInstanceOfTagAwareAdapterInterface(): void
    {
        \$this->expectException(InvalidArgumentException::class);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('foo.bar');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('foo.bar')
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with('foo.bar')
            ->willReturn(new \\stdClass());

        \$this->cacheProvider->getCacheAdapter();
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
        return "@bundles/CacheBundle/Tests/Cache/CacheProviderTest.php";
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
        return new Source("", "@bundles/CacheBundle/Tests/Cache/CacheProviderTest.php", "/app/docroot/app/bundles/CacheBundle/Tests/Cache/CacheProviderTest.php");
    }
}
