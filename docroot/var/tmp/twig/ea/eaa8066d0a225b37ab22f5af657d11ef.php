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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php */
class __TwigTemplate_5adb320d1839d5871c663beeca1f74c5 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\Unsubscription;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail;

class ParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that an email is found inside a feedback report
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser::parse
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail::getContactEmail
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail::getUnsubscriptionAddress
     */
    public function testThatReplyIsDetectedThroughTrackingPixel(): void
    {
        \$message              = new Message();
        \$message->fromAddress = 'hello@hello.com';
        \$message->to          = [
            'test+unsubscribe@test.com' => 'Test Test',
        ];

        \$parser = new Parser(\$message);

        \$unsubscribedEmail = \$parser->parse();
        \$this->assertInstanceOf(UnsubscribedEmail::class, \$unsubscribedEmail);

        \$this->assertEquals('hello@hello.com', \$unsubscribedEmail->getContactEmail());
        \$this->assertEquals('test+unsubscribe@test.com', \$unsubscribedEmail->getUnsubscriptionAddress());
    }

    /**
     * @testdox Test that an exeption is thrown if a unsubscription email is not found
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser::parse
     */
    public function testExceptionIsThrownWithUnsubscribeNotFound(): void
    {
        \$this->expectException(UnsubscriptionNotFound::class);

        \$message = new Message();
        \$parser  = new Parser(\$message);

        \$parser->parse();
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php");
    }
}
