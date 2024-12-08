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

/* @bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php */
class __TwigTemplate_81e74fabaa26d6558161681608c7f9bb extends Template
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
use Mautic\\MarketplaceBundle\\Command\\RemoveCommand;
use Mautic\\MarketplaceBundle\\DTO\\ConsoleOutput;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;

final class RemoveCommandTest extends AbstractMauticTestCase
{
    /**
     * @var MockObject&LoggerInterface
     */
    private MockObject \$logger;

    private string \$packageName;

    public function setUp(): void
    {
        parent::setUp();
        \$this->logger      = \$this->createMock(LoggerInterface::class);
        \$this->packageName = 'koco/mautic-recaptcha-bundle';
    }

    public function testRemoveCommand(): void
    {
        \$composer    = \$this->createMock(ComposerHelper::class);
        \$composer->method('remove')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutput(0, 'OK'));
        \$composer->method('getMauticPluginPackages')
            ->willReturn(['koco/mautic-recaptcha-bundle']);
        \$command = new RemoveCommand(\$composer, \$this->logger);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:remove',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(0, \$result->getStatusCode());
    }

    public function testRemoveCommandWithInvalidPackageType(): void
    {
        \$composer    = \$this->createMock(ComposerHelper::class);
        \$composer->method('remove')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutput(0, 'OK'));
        \$composer->method('getMauticPluginPackages')
            ->willReturn([]);
        \$command = new RemoveCommand(\$composer, \$this->logger);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:remove',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(1, \$result->getStatusCode());
    }

    public function testRemoveCommandWithComposerError(): void
    {
        \$composer    = \$this->createMock(ComposerHelper::class);
        \$composer->method('remove')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutput(1, 'Error while removing package'));
        \$composer->method('getMauticPluginPackages')
            ->willReturn([]);
        \$command = new RemoveCommand(\$composer, \$this->logger);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:remove',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(1, \$result->getStatusCode());
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
        return "@bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php", "/app/docroot/app/bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php");
    }
}
