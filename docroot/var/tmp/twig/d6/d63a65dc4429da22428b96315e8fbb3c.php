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

/* @bundles/ChannelBundle/Tests/Command/SendChannelBroadcastCommandTest.php */
class __TwigTemplate_e3e193b009d967335aeac6d15a8144fb extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

final class SendChannelBroadcastCommandTest extends MauticMysqlTestCase
{
    public function testBroadcastCommand(): void
    {
        \$commandTester = \$this->testSymfonyCommand('mautic:broadcasts:send');
        Assert::assertSame(0, \$commandTester->getStatusCode());
    }

    public function testBroadcastCommandWithLimit(): void
    {
        \$commandTester = \$this->testSymfonyCommand('mautic:broadcasts:send', ['--limit' => 1]);
        Assert::assertSame(0, \$commandTester->getStatusCode());
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
        return "@bundles/ChannelBundle/Tests/Command/SendChannelBroadcastCommandTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Command/SendChannelBroadcastCommandTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/Command/SendChannelBroadcastCommandTest.php");
    }
}
