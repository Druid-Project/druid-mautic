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

/* @bundles/EmailBundle/Tests/EventListener/ProcessUnsubscribeSubscriberTest.php */
class __TwigTemplate_78a5161a8c4ea8e39a3dbfee6440dc04 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\EventListener;

use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\EventListener\\ProcessUnsubscribeSubscriber;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class ProcessUnsubscribeSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|Unsubscribe
     */
    private MockObject \$unsubscribe;

    /**
     * @var MockObject|FeedbackLoop
     */
    private MockObject \$feedbackLoop;

    private ProcessUnsubscribeSubscriber \$subscriber;

    protected function setup(): void
    {
        parent::setUp();

        \$this->unsubscribe      = \$this->createMock(Unsubscribe::class);
        \$this->feedbackLoop     = \$this->createMock(FeedbackLoop::class);
        \$this->subscriber       = new ProcessUnsubscribeSubscriber(\$this->unsubscribe, \$this->feedbackLoop);
    }

    public function testOnEmailSend(): void
    {
        \$helper = \$this->createMock(MailHelper::class);
        \$helper->method('generateUnsubscribeEmail')->willReturn('unsubscribe@example.com');
        \$helper->method('getCustomHeaders')->willReturn([
            'List-Unsubscribe-Post' => 'List-Unsubscribe=One-Click',
            'List-Unsubscribe'      => '<https://example.com/email/unsubscribe/65cf64d8cb367903848157>',
        ]);

        \$helper->expects(\$this->once())
            ->method('addCustomHeader')
            ->with('List-Unsubscribe', '<https://example.com/email/unsubscribe/65cf64d8cb367903848157>, <mailto:unsubscribe@example.com>');

        \$event = new EmailSendEvent(\$helper);
        \$this->subscriber->onEmailSend(\$event);
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
        return "@bundles/EmailBundle/Tests/EventListener/ProcessUnsubscribeSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/ProcessUnsubscribeSubscriberTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/EventListener/ProcessUnsubscribeSubscriberTest.php");
    }
}
