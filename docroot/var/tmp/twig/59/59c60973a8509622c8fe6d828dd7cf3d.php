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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php */
class __TwigTemplate_1fce0e6a03378a2091da279acb6328a9 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\Bounce;

use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser;

class ParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that a bounce is found through DsnReport
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser::parse
     */
    public function testBouncedEmailIsReturnedFromParsedDsnReport(): void
    {
        \$message            = new Message();
        \$message->dsnReport = <<<'DSN'
Original-Recipient: sdfgsdfg@seznan.cz
Final-Recipient: rfc822;sdfgsdfg@seznan.cz
Action: failed
Status: 5.4.4
Diagnostic-Code: DNS; Host not found
DSN;

        \$parser = new Parser(\$message);
        \$bounce = \$parser->parse();

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
    }

    /**
     * @testdox Test that a bounce is found through body
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser::parse
     */
    public function testBouncedEmailIsReturnedFromParsedBody(): void
    {
        \$message            = new Message();
        \$message->textPlain = <<<'BODY'
Please direct further questions regarding this message to your e-mail
administrator.

--AOL Postmaster



   ----- The following addresses had permanent fatal errors -----
<recipient@example.net>

   ----- Transcript of session follows -----
... while talking to air-yi01.mail.aol.com.:
>>> RCPT To:<recipient@example.net>
<<< 550 MAILBOX NOT FOUND
550 <recipient@example.net>... User unknown
BODY;

        \$parser = new Parser(\$message);
        \$bounce = \$parser->parse();

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php");
    }
}
