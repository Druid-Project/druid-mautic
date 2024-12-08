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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoop/ParserTest.php */
class __TwigTemplate_fca9c17c17a968cbe68c66fe31441af0 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\FeedbackLoop;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\FeedbackLoopNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop\\Parser;

class ParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that an email is found inside a feedback report
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop\\Parser::parse
     */
    public function testEmailIsFoundInFeedbackLoopEmail(): void
    {
        \$message            = new Message();
        \$message->fblReport = <<<'BODY'
Feedback-Type: abuse
User-Agent: SomeGenerator/1.0
Version: 1
Original-Mail-From: <somespammer@example.net>
Original-Rcpt-To: <user@example.com>
Received-Date: Thu, 8 Mar 2005 14:00:00 EDT
Source-IP: 192.0.2.2
Authentication-Results: mail.example.com
               smtp.mail=somespammer@example.com;
               spf=fail
Reported-Domain: example.net
Reported-Uri: http://example.net/earn_money.html
Reported-Uri: mailto:user@example.com
Removal-Recipient: user@example.com
BODY;

        \$parser = new Parser(\$message);

        \$email = \$parser->parse();
        \$this->assertEquals('user@example.com', \$email);
    }

    /**
     * @testdox Test that an exception is thrown if no feedback report is found
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop\\Parser::parse
     */
    public function testExceptionIsThrownWithFblNotFound(): void
    {
        \$this->expectException(FeedbackLoopNotFound::class);

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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoop/ParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoop/ParserTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoop/ParserTest.php");
    }
}
