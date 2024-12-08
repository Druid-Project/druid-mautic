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

/* @bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php */
class __TwigTemplate_2e47d46696e8d9db45a32237456dd8b1 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\BuilderIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\BuilderInterface;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class BuilderIntegrationsHelperTest extends TestCase
{
    /**
     * @var IntegrationsHelper|MockObject
     */
    private MockObject \$integrationsHelper;

    private BuilderIntegrationsHelper \$builderIntegrationsHelper;

    protected function setUp(): void
    {
        \$this->integrationsHelper        = \$this->createMock(IntegrationsHelper::class);
        \$this->builderIntegrationsHelper = new BuilderIntegrationsHelper(\$this->integrationsHelper);
    }

    public function testBuilderNotFoundIfFeatureSupportedButNotEnabled(): void
    {
        \$builder     = \$this->createMock(BuilderInterface::class);
        \$integration = new Integration();

        \$builder->expects(\$this->once())
            ->method('isSupported')
            ->with('page')
            ->willReturn(true);

        \$builder->expects(\$this->once())
            ->method('getIntegrationConfiguration')
            ->willReturn(\$integration);

        \$this->builderIntegrationsHelper->addIntegration(\$builder);

        \$this->expectException(IntegrationNotFoundException::class);

        \$this->builderIntegrationsHelper->getBuilder('page');
    }

    public function testBuilderNotFoundIfFeatureIsNotSupported(): void
    {
        \$builder = \$this->createMock(BuilderInterface::class);
        \$builder->expects(\$this->once())
            ->method('isSupported')
            ->with('page')
            ->willReturn(false);

        \$builder->expects(\$this->never())
            ->method('getIntegrationConfiguration');

        \$this->builderIntegrationsHelper->addIntegration(\$builder);

        \$this->expectException(IntegrationNotFoundException::class);

        \$this->builderIntegrationsHelper->getBuilder('page');
    }

    public function testBuilderFoundIfFeatureIsSupportedAndBuilderEnabled(): void
    {
        \$builder = \$this->createMock(BuilderInterface::class);

        \$integration = new Integration();
        \$integration->setIsPublished(true);

        \$builder->expects(\$this->once())
            ->method('isSupported')
            ->with('page')
            ->willReturn(true);

        \$builder->expects(\$this->once())
            ->method('getIntegrationConfiguration')
            ->willReturn(\$integration);

        \$this->builderIntegrationsHelper->addIntegration(\$builder);

        \$foundBuilder = \$this->builderIntegrationsHelper->getBuilder('page');

        Assert::assertSame(\$builder, \$foundBuilder);
    }

    public function testBuilderNamesAreReturned(): void
    {
        \$builder1 = \$this->createMock(BuilderInterface::class);
        \$builder1->expects(\$this->exactly(2))
            ->method('getName')
            ->willReturn('builder1');
        \$builder1->expects(\$this->once())
            ->method('getDisplayName')
            ->willReturn('Builder One');
        \$this->builderIntegrationsHelper->addIntegration(\$builder1);

        \$builder2 = \$this->createMock(BuilderInterface::class);
        \$builder2->expects(\$this->exactly(2))
            ->method('getName')
            ->willReturn('builder2');
        \$builder2->expects(\$this->once())
            ->method('getDisplayName')
            ->willReturn('Builder Two');
        \$this->builderIntegrationsHelper->addIntegration(\$builder2);

        Assert::assertSame(
            [
                'builder1' => 'Builder One',
                'builder2' => 'Builder Two',
            ],
            \$this->builderIntegrationsHelper->getBuilderNames()
        );
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php");
    }
}
