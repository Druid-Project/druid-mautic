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

/* @bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php */
class __TwigTemplate_d20ff065775224ebb6d0aa3f4edc74c1 extends Template
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

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Event\\QueueEmailEvent;
use Mautic\\EmailBundle\\EventListener\\EmailSubscriber;
use Mautic\\EmailBundle\\Mailer\\Message\\MauticMessage;
use Mautic\\EmailBundle\\Model\\EmailModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class EmailSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&IpLookupHelper
     */
    private MockObject \$ipLookupHelper;

    /**
     * @var MockObject&AuditLogModel
     */
    private MockObject \$auditLogModel;

    /**
     * @var MockObject&EmailModel
     */
    private MockObject \$emailModel;

    /**
     * @var MockObject&TranslatorInterface
     */
    private MockObject \$translator;

    /**
     * @var MockObject&MauticMessage
     */
    private MockObject \$mockMessage;

    private EmailSubscriber \$subscriber;

    protected function setup(): void
    {
        parent::setUp();

        \$this->ipLookupHelper   = \$this->createMock(IpLookupHelper::class);
        \$this->auditLogModel    = \$this->createMock(AuditLogModel::class);
        \$this->emailModel       = \$this->createMock(EmailModel::class);
        \$this->translator       = \$this->createMock(TranslatorInterface::class);
        \$this->mockMessage      = \$this->createMock(MauticMessage::class);
        \$this->subscriber       = new EmailSubscriber(\$this->ipLookupHelper, \$this->auditLogModel, \$this->emailModel, \$this->translator);
    }

    public function testOnEmailResendWithNoLeadIdHash(): void
    {
        \$event = new QueueEmailEvent(\$this->mockMessage);

        \$this->emailModel->expects(\$this->never())
            ->method('getEmailStatus');

        \$this->subscriber->onEmailResend(\$event);

        Assert::assertFalse(\$event->shouldTryAgain());
    }

    public function testOnEmailResendWithNoStat(): void
    {
        \$message = new class() extends MauticMessage {
            public ?string \$leadIdHash = 'some-hash';
        };

        \$event = new QueueEmailEvent(\$message);

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus');

        \$this->emailModel->expects(\$this->never())
            ->method('saveEmailStat');

        \$this->emailModel->expects(\$this->never())
            ->method('setDoNotContact');

        \$this->subscriber->onEmailResend(\$event);

        Assert::assertFalse(\$event->shouldTryAgain());
    }

    public function testOnEmailResendWithNoRetry(): void
    {
        \$message = new class() extends MauticMessage {
            public ?string \$leadIdHash = 'some-hash';
        };

        \$event = new QueueEmailEvent(\$message);
        \$stat  = new Stat();

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus')
            ->willReturn(\$stat);

        \$this->emailModel->expects(\$this->once())
            ->method('saveEmailStat')
            ->with(\$stat);

        \$this->emailModel->expects(\$this->never())
            ->method('setDoNotContact');

        \$this->subscriber->onEmailResend(\$event);

        Assert::assertSame(1, \$stat->getRetryCount());
        Assert::assertTrue(\$event->shouldTryAgain());
    }

    public function testOnEmailResendWhenShouldTryAgain(): void
    {
        \$this->mockMessage->method('getLeadIdHash')
            ->willReturn('idhash');

        \$queueEmailEvent = new QueueEmailEvent(\$this->mockMessage);

        \$stat = new Stat();
        \$stat->setRetryCount(2);

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus')
            ->willReturn(\$stat);

        \$this->subscriber->onEmailResend(\$queueEmailEvent);
        \$this->assertTrue(\$queueEmailEvent->shouldTryAgain());
    }

    public function testOnEmailResendWhenShouldNotTryAgain(): void
    {
        \$this->mockMessage
            ->method('getLeadIdHash')
            ->willReturn('idhash');

        \$this->mockMessage->expects(\$this->once())
            ->method('getSubject')
            ->willReturn('Subject');

        \$queueEmailEvent = new QueueEmailEvent(\$this->mockMessage);

        \$stat = new Stat();
        \$stat->setRetryCount(3);

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus')
            ->willReturn(\$stat);

        \$this->subscriber->onEmailResend(\$queueEmailEvent);
        \$this->assertFalse(\$queueEmailEvent->shouldTryAgain());
    }

    public function testOnEmailResendWith4Retry(): void
    {
        \$message = new class() extends MauticMessage {
            public ?string \$leadIdHash = 'some-hash';
        };

        \$message->subject('Subject');

        \$event = new QueueEmailEvent(\$message);
        \$stat  = new Stat();

        \$stat->setRetryCount(4);

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus')
            ->willReturn(\$stat);

        \$this->emailModel->expects(\$this->once())
            ->method('saveEmailStat')
            ->with(\$stat);

        \$this->emailModel->expects(\$this->once())
            ->method('setDoNotContact')
            ->with(\$stat);

        \$this->subscriber->onEmailResend(\$event);

        Assert::assertSame(5, \$stat->getRetryCount());
        Assert::assertFalse(\$event->shouldTryAgain());
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
        return "@bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php");
    }
}
