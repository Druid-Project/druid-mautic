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

/* @bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php */
class __TwigTemplate_2bfec8864818f3c0b9fd7f964a5c0376 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\Helper\\ChannelExtractor;

class ChannelExtractorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testChannelIsSet(): void
    {
        \$event  = new Event();
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
    }

    public function testChannelIsIgnoredIfSet(): void
    {
        \$event  = new Event();
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->never())
            ->method('getChannel');

        \$log = new LeadEventLog();
        \$log->setChannel('page');
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('page', \$log->getChannel());
    }

    public function testChannelIdIsSet(): void
    {
        \$event = new Event();
        \$event->setProperties(['email' => 1]);
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$config->expects(\$this->once())
            ->method('getChannelIdField')
            ->willReturn('email');

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
        \$this->assertEquals(1, \$log->getChannelId());
    }

    public function testChannelIdIsIgnoredIfPropertiesAreEmpty(): void
    {
        \$event = new Event();
        \$event->setProperties(null);
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$config->expects(\$this->once())
            ->method('getChannelIdField')
            ->willReturn('email');

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
        \$this->assertEquals(null, \$log->getChannelId());
    }

    public function testChannelIdIsIgnoredIfChannelIdFieldIsNotSet(): void
    {
        \$event = new Event();
        \$event->setProperties(['email' => 1]);
        \$config = \$this->createMock(AbstractEventAccessor::class);
        \$config->expects(\$this->once())
            ->method('getChannel')
            ->willReturn('email');

        \$config->expects(\$this->once())
            ->method('getChannelIdField')
            ->willReturn(null);

        \$log = new LeadEventLog();
        ChannelExtractor::setChannel(\$log, \$event, \$config);

        \$this->assertEquals('email', \$log->getChannel());
        \$this->assertEquals(null, \$log->getChannelId());
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
        return "@bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Helper/ChannelExtractorTest.php");
    }
}
