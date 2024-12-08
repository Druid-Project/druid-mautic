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

/* @bundles/MarketplaceBundle/Tests/Functional/Command/InstallCommandTest.php */
class __TwigTemplate_1334a07c1afe3a377527863e3681a290 extends Template
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

namespace Mautic\\MarketplaceBundle\\Tests\\Functional\\Command;

use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\MarketplaceBundle\\Command\\InstallCommand;
use Mautic\\MarketplaceBundle\\DTO\\ConsoleOutput;
use Mautic\\MarketplaceBundle\\DTO\\PackageDetail;
use Mautic\\MarketplaceBundle\\Exception\\ApiException;
use Mautic\\MarketplaceBundle\\Model\\PackageModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class InstallCommandTest extends AbstractMauticTestCase
{
    /**
     * @var MockObject&ComposerHelper
     */
    private MockObject \$composerHelper;

    /**
     * @var MockObject&PackageModel
     */
    private MockObject \$packageModel;

    private string \$packageName;

    public function setUp(): void
    {
        parent::setUp();
        \$this->composerHelper = \$this->createMock(ComposerHelper::class);
        \$this->packageModel   = \$this->createMock(PackageModel::class);
        \$this->packageName    = 'koco/mautic-recaptcha-bundle';
    }

    public function testInstallCommand(): void
    {
        \$this->packageModel->method('getPackageDetail')
            ->with(\$this->packageName)
            ->willReturn(\$this->getPackageDetail());

        \$this->composerHelper->method('install')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutput(0, 'OK'));

        \$command = new InstallCommand(\$this->composerHelper, \$this->packageModel);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:install',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(0, \$result->getStatusCode());
    }

    public function testInstallCommandWithDryRun(): void
    {
        \$this->packageModel->method('getPackageDetail')
            ->with(\$this->packageName)
            ->willReturn(\$this->getPackageDetail());

        \$this->composerHelper->method('install')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutput(0, 'OK'));

        \$command = new InstallCommand(\$this->composerHelper, \$this->packageModel);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:install',
            ['package' => \$this->packageName, '--dry-run' => null],
            \$command
        );

        Assert::assertSame(0, \$result->getStatusCode());
        Assert::assertStringContainsString('dry-running this installation', \$result->getDisplay());
    }

    public function testInstallCommandWithNonExistingPackage(): void
    {
        \$packageName = 'mautic/non-existent-plugin';

        \$this->packageModel->method('getPackageDetail')
            ->with(\$packageName)
            ->willThrowException(new ApiException('Package not found', 404));

        \$command = new InstallCommand(\$this->composerHelper, \$this->packageModel);

        \$this->expectException(\\InvalidArgumentException::class);

        \$this->testSymfonyCommand(
            'mautic:marketplace:install',
            ['package' => \$packageName],
            \$command
        );
    }

    public function testInstallCommandWithComposerNotAvailable(): void
    {
        \$packageName = 'mautic/non-existent-plugin';

        \$this->packageModel->method('getPackageDetail')
            ->with(\$packageName)
            ->willThrowException(new ApiException('Internal Server Error', 500));

        \$command = new InstallCommand(\$this->composerHelper, \$this->packageModel);

        \$this->expectException(\\Exception::class);

        \$this->testSymfonyCommand(
            'mautic:marketplace:install',
            ['package' => \$packageName],
            \$command
        );
    }

    public function testInstallCommandWithWrongPackageType(): void
    {
        \$packageName                      = 'mautic/package-with-wrong-type';
        \$packageDetail                    = \$this->getPackageDetail();
        \$packageDetail->packageBase->type = 'non-existent-type';

        \$this->packageModel->method('getPackageDetail')
            ->with(\$packageName)
            ->willReturn(\$packageDetail);

        \$command = new InstallCommand(\$this->composerHelper, \$this->packageModel);

        \$this->expectException(\\Exception::class);

        \$this->testSymfonyCommand(
            'mautic:marketplace:install',
            ['package' => \$packageName],
            \$command
        );
    }

    public function testInstallCommandWithFailedComposerCommand(): void
    {
        \$packageName = 'mautic/crash-package';

        \$this->composerHelper->method('install')
            ->with(\$packageName)
            ->willReturn(new ConsoleOutput(1, 'Something went wrong during the installation'));

        \$this->packageModel->method('getPackageDetail')
            ->with(\$packageName)
            ->willReturn(\$this->getPackageDetail());

        \$command = new InstallCommand(\$this->composerHelper, \$this->packageModel);
        \$result  = \$this->testSymfonyCommand(
            'mautic:marketplace:install',
            ['package' => \$packageName],
            \$command
        );

        Assert::assertSame(1, \$result->getStatusCode());
        Assert::assertSame(\"Installing mautic/crash-package, this might take a while...\\nError while installing this plugin.\\nSomething went wrong during the installation\\n\", \$result->getDisplay());
    }

    private function getPackageDetail(): PackageDetail
    {
        \$payload = json_decode(file_get_contents(__DIR__.'/../../ApiResponse/detail.json'), true);

        return PackageDetail::fromArray(\$payload['package']);
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
        return "@bundles/MarketplaceBundle/Tests/Functional/Command/InstallCommandTest.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/Functional/Command/InstallCommandTest.php", "/app/docroot/app/bundles/MarketplaceBundle/Tests/Functional/Command/InstallCommandTest.php");
    }
}
