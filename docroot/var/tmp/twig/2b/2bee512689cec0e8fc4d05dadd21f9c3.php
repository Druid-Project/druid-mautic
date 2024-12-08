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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php */
class __TwigTemplate_86cd6114fa74c33b3f14b4afd56815dd extends Template
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

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Result;
use Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProvider;
use PHPUnit\\Framework\\MockObject\\MockObject;

class VersionProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var Connection|MockObject
     */
    private MockObject \$connection;

    /**
     * @var MockObject&Result
     */
    private MockObject \$result;

    private VersionProvider \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->connection           = \$this->createMock(Connection::class);
        \$this->result               = \$this->createMock(Result::class);
        \$this->provider             = new VersionProvider(\$this->connection);
    }

    public function testGetVersionForMySql(): void
    {
        \$this->connection->expects(\$this->once())
            ->method('executeQuery')
            ->with('SELECT VERSION()')
            ->willReturn(\$this->result);

        \$this->result->expects(\$this->once())
            ->method('fetchOne')
            ->willReturn('5.7.23-23-log');

        \$version = \$this->provider->getVersion();

        \$this->assertSame('5.7.23-23-log', \$version);
        \$this->assertFalse(\$this->provider->isMariaDb());
        \$this->assertTrue(\$this->provider->isMySql());
    }

    public function testGetVersionForMariaDb(): void
    {
        \$this->connection->expects(\$this->once())
            ->method('executeQuery')
            ->with('SELECT VERSION()')
            ->willReturn(\$this->result);

        \$this->result->expects(\$this->once())
            ->method('fetchOne')
            ->willReturn('10.3.9-MariaDB');

        \$version = \$this->provider->getVersion();

        \$this->assertSame('10.3.9-MariaDB', \$version);
        \$this->assertTrue(\$this->provider->isMariaDb());
        \$this->assertFalse(\$this->provider->isMySql());
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
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Provider/VersionProviderTest.php");
    }
}
