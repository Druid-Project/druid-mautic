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

/* @bundles/EmailBundle/Tests/EventListener/WebhookSubscriberTest.php */
class __TwigTemplate_1deca5ec0931e0f5de7b81bc1653c9e0 extends Template
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

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\EventListener\\WebhookSubscriber;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\WebhookBundle\\Event\\WebhookBuilderEvent;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class WebhookSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|WebhookModel
     */
    private MockObject \$webhookModel;

    private WebhookSubscriber \$subscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->webhookModel = \$this->createMock(WebhookModel::class);
        \$this->subscriber   = new WebhookSubscriber(\$this->webhookModel, true);
    }

    public function testOnWebhookBuild(): void
    {
        \$event = \$this->createMock(WebhookBuilderEvent::class);

        \$event->expects(\$this->exactly(2))
            ->method('addEvent')
            ->withConsecutive(
                [
                    EmailEvents::EMAIL_ON_SEND,
                    [
                        'label'       => 'mautic.email.webhook.event.send',
                        'description' => 'mautic.email.webhook.event.send_desc',
                    ],
                ],
                [
                    EmailEvents::EMAIL_ON_OPEN,
                    [
                        'label'       => 'mautic.email.webhook.event.open',
                        'description' => 'mautic.email.webhook.event.open_desc',
                    ],
                ]
            );

        \$this->subscriber->onWebhookBuild(\$event);
    }

    public function testOnEmailSendWhenInternalSend(): void
    {
        \$event = \$this->createMock(EmailSendEvent::class);

        \$event->expects(\$this->once())
            ->method('isInternalSend')
            ->willReturn(true);

        \$this->webhookModel->expects(\$this->never())
            ->method('queueWebhooksByType');

        \$this->subscriber->onEmailSend(\$event);
    }

    public function testOnEmailSend(): void
    {
        \$event   = \$this->createMock(EmailSendEvent::class);
        \$contact = \$this->createMock(Lead::class);
        \$email   = \$this->createMock(Email::class);
        \$tokens  = ['{unsubscribe_text}' => '<a href=\\\"https://...'];
        \$headers = ['List-Unsubscribe' => '<a href=\\\"https://...'];
        \$source  = ['List-Unsubscribe' => '<a href=\\\"https://...']; // todo find out real source example

        \$event->expects(\$this->once())
            ->method('isInternalSend')
            ->willReturn(false);

        \$event->expects(\$this->once())
            ->method('getEmail')
            ->willReturn(\$email);

        \$event->expects(\$this->any())
            ->method('getLead')
            ->willReturn(\$contact);

        \$event->expects(\$this->once())
            ->method('getTokens')
            ->willReturn(\$tokens);

        \$event->expects(\$this->once())
            ->method('getContentHash')
            ->willReturn('8bb9181fa1c76671352b79565e244240');

        \$event->expects(\$this->once())
            ->method('getIdHash')
            ->willReturn('5cdaa50e155f9732391159');

        \$event->expects(\$this->once())
            ->method('getContent')
            ->willReturn('<!DOCTYPE html><html>...');

        \$event->expects(\$this->once())
            ->method('getSubject')
            ->willReturn('Test Email');

        \$event->expects(\$this->once())
            ->method('getSource')
            ->willReturn(\$source);

        \$event->expects(\$this->once())
            ->method('getTextHeaders')
            ->willReturn(\$headers);

        \$this->webhookModel->expects(\$this->once())
            ->method('queueWebhooksByType')
            ->with(
                EmailEvents::EMAIL_ON_SEND,
                [
                    'email'       => \$email,
                    'contact'     => \$contact,
                    'tokens'      => \$tokens,
                    'contentHash' => '8bb9181fa1c76671352b79565e244240',
                    'idHash'      => '5cdaa50e155f9732391159',
                    'content'     => '<!DOCTYPE html><html>...',
                    'subject'     => 'Test Email',
                    'source'      => \$source,
                    'headers'     => \$headers,
                ]
            );

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
        return "@bundles/EmailBundle/Tests/EventListener/WebhookSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/WebhookSubscriberTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/EventListener/WebhookSubscriberTest.php");
    }
}
