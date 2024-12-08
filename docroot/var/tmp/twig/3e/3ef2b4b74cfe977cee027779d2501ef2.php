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

/* @bundles/EmailBundle/Tests/Event/EmailSendEventTest.php */
class __TwigTemplate_ec208797c65096ddaeb3418626a4ee17 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Event;

use Mautic\\EmailBundle\\Event\\EmailSendEvent;

class EmailSendEventTest extends \\PHPUnit\\Framework\\TestCase
{
    private EmailSendEvent \$emailSendEvent;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->emailSendEvent = new EmailSendEvent();
    }

    /**
     * Firstly set HTML content, then set empty plain content. Plain text should be generated.
     */
    public function testSetPlainTextWhenNeedGeneratedPlainText(): void
    {
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->emailSendEvent->setPlainText('');
        \$this->assertSame('HTML CONTENT', \$this->emailSendEvent->getPlainText());
    }

    /**
     * Firstly set HTML content, then set plain content. Plain text should not be generated.
     */
    public function testSetPlainTextWhenNotNeedGeneratedPlainText(): void
    {
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->emailSendEvent->setPlainText('plain content');
        \$this->assertSame('plain content', \$this->emailSendEvent->getPlainText());
    }

    /**
     * Firstly set empty plain content, then set HTML content. Plain text should be generated.
     */
    public function testSetContentWhenNeedGeneratedPlainText(): void
    {
        \$this->emailSendEvent->setPlainText('');
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->assertSame('HTML CONTENT', \$this->emailSendEvent->getPlainText());
    }

    /**
     * Firstly set plain content, then set HTML content. Plain text should not be generated.
     */
    public function testSetContentWhenNotNeedGeneratedPlainText(): void
    {
        \$this->emailSendEvent->setPlainText('plain content');
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->assertSame('plain content', \$this->emailSendEvent->getPlainText());
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
        return "@bundles/EmailBundle/Tests/Event/EmailSendEventTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Event/EmailSendEventTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Event/EmailSendEventTest.php");
    }
}
