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

/* @bundles/ChannelBundle/Tests/Event/ChannelBroadcastEventTest.php */
class __TwigTemplate_0735724ea208f37737d3a4570562b229 extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Event;

use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ChannelBroadcastEventTest extends TestCase
{
    private string \$channel;

    private int \$channelId;

    private OutputInterface \$output;

    protected function setUp(): void
    {
        \$this->channel   = 'email';
        \$this->channelId = 1;
        \$this->output    = new BufferedOutput();
    }

    public function testConstructorAndGetters(): void
    {
        \$event = new ChannelBroadcastEvent(\$this->channel, \$this->channelId, \$this->output);

        \$this->assertSame(\$this->channel, \$event->getChannel());
        \$this->assertSame(\$this->channelId, \$event->getId());
        \$this->assertSame(\$this->output, \$event->getOutput());
    }

    public function testResults(): void
    {
        \$event                  = new ChannelBroadcastEvent(\$this->channel, \$this->channelId, \$this->output);
        \$successCount           = 10;
        \$failedCount            = 2;
        \$failedRecipientsByList = ['list1' => ['user1@example.com', 'user2@example.com']];

        \$event->setResults(\$this->channel, \$successCount, \$failedCount, \$failedRecipientsByList);

        \$this->assertSame([
            \$this->channel => [
                'success'                => \$successCount,
                'failed'                 => \$failedCount,
                'failedRecipientsByList' => \$failedRecipientsByList,
            ],
        ], \$event->getResults());
    }

    public function testCheckContext(): void
    {
        \$event = new ChannelBroadcastEvent(\$this->channel, \$this->channelId, \$this->output);

        \$this->assertTrue(\$event->checkContext('email'));
        \$this->assertFalse(\$event->checkContext('sms'));
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
        return "@bundles/ChannelBundle/Tests/Event/ChannelBroadcastEventTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Event/ChannelBroadcastEventTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/Event/ChannelBroadcastEventTest.php");
    }
}
