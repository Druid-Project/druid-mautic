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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php */
class __TwigTemplate_bc48a3668bae5f2e229ed658bce60c18 extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Type;

class BodyParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that a BouncedEmail is returned from a bounce detected in the body
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser::getBounce
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser::parse
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
        \$parser = new BodyParser();
        \$bounce = \$parser->getBounce(\$message);

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
        \$this->assertEquals('recipient@example.net', \$bounce->getContactEmail());
        \$this->assertEquals(Category::UNKNOWN, \$bounce->getRuleCategory());
        \$this->assertEquals(Type::HARD, \$bounce->getType());
        \$this->assertTrue(\$bounce->isFinal());
    }

    /**
     * @testdox Test that an exception is thrown if a bounce cannot be found in the body
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser::getBounce
     */
    public function testBounceNotFoundFromBadDsnReport(): void
    {
        \$this->expectException(BounceNotFound::class);

        \$message            = new Message();
        \$message->textPlain = 'BAD';
        \$parser             = new BodyParser();
        \$parser->getBounce(\$message);
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php");
    }
}
