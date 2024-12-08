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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php */
class __TwigTemplate_99583d099af39666549d9619dae6f94e extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\Provider;

use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumnsInterface;
use Mautic\\CoreBundle\\Doctrine\\Provider\\GeneratedColumnsProvider;
use Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProviderInterface;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class GeneratedColumnsProviderTest extends TestCase
{
    /**
     * @var MockObject|VersionProviderInterface
     */
    private \$versionProvider;

    /**
     * @var MockObject|EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var GeneratedColumnsProvider
     */
    private \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->versionProvider = \$this->createMock(VersionProviderInterface::class);
        \$this->dispatcher      = \$this->createMock(EventDispatcherInterface::class);
        \$this->provider        = new GeneratedColumnsProvider(\$this->versionProvider, \$this->dispatcher);

        \$this->dispatcher->method('hasListeners')->willReturn(true);
    }

    public function testGetGeneratedColumnsIfNotSupported(): void
    {
        \$notSupportedMySqlVersion = '5.7.13';

        \$this->versionProvider->expects(\$this->once())
            ->method('getVersion')
            ->willReturn(\$notSupportedMySqlVersion);

        \$this->dispatcher->expects(\$this->never())
            ->method('dispatch');

        \$generatedColumns = \$this->provider->getGeneratedColumns();

        \$this->assertInstanceOf(GeneratedColumnsInterface::class, \$generatedColumns);
        \$this->assertCount(0, \$generatedColumns);
    }

    public function testGetGeneratedColumnsIfSupported(): void
    {
        \$supportedMySqlVersion = '5.7.14';

        \$event = new GeneratedColumnsEvent();
        \$event->addGeneratedColumn(new GeneratedColumn('page_hits', 'generated_hit_date', 'DATE', 'not important'));

        \$this->versionProvider->expects(\$this->exactly(2))
            ->method('getVersion')
            ->willReturn(\$supportedMySqlVersion);

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->willReturn(\$event);

        \$generatedColumns = \$this->provider->getGeneratedColumns();
        \$this->assertInstanceOf(GeneratedColumnsInterface::class, \$generatedColumns);

        /** @var GeneratedColumn \$generatedColumn */
        \$generatedColumn = \$generatedColumns->current();
        \$this->assertSame(MAUTIC_TABLE_PREFIX.'page_hits', \$generatedColumn->getTableName());

        // Ensure that the cache works and dispatcher is called only once
        \$generatedColumns = \$this->provider->getGeneratedColumns();
        \$this->assertCount(1, \$generatedColumns);
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
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php");
    }
}
