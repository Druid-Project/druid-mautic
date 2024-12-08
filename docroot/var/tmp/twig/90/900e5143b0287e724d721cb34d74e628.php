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

/* @bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php */
class __TwigTemplate_28edd59231913f7f811b46b157e32496 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Helper;

use Mautic\\CoreBundle\\Helper\\CommandHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class CommandHelperTest extends MauticMysqlTestCase
{
    /**
     * @var CommandHelper
     */
    private \$commandHelper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->commandHelper = static::getContainer()->get('mautic.helper.command');
    }

    public function testRunCommandWithParam(): void
    {
        \$response = \$this->commandHelper->runCommand('help', ['--version']);
        Assert::assertSame(0, \$response->getStatusCode());
        Assert::assertStringContainsString('(env: test, debug: false)', \$response->getMessage());
    }

    public function testRunCommandWithoutParam(): void
    {
        \$response = \$this->commandHelper->runCommand('list');
        Assert::assertSame(0, \$response->getStatusCode());
        Assert::assertStringContainsString('doctrine:database:create', \$response->getMessage());
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
        return "@bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php");
    }
}
