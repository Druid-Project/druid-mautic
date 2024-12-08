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

/* @bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php */
class __TwigTemplate_9f215c9ab526fe0bd27a270d34fe09fe extends Template
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

namespace Mautic\\SmsBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Event\\SmsSendEvent;
use Mautic\\SmsBundle\\EventListener\\WebhookSubscriber;
use Mautic\\SmsBundle\\SmsEvents;
use Mautic\\WebhookBundle\\Event\\WebhookBuilderEvent;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class WebhookSubscriberTest extends \\PHPUnit\\Framework\\TestCase
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
        \$this->subscriber   = new WebhookSubscriber(\$this->webhookModel);
    }

    public function testOnWebhookBuild(): void
    {
        \$event = \$this->createMock(WebhookBuilderEvent::class);

        \$event->expects(\$this->once())
            ->method('addEvent')
            ->with(
                SmsEvents::SMS_ON_SEND,
                [
                    'label'       => 'mautic.sms.webhook.event.send',
                    'description' => 'mautic.sms.webhook.event.send_desc',
                ]
            );

        \$this->subscriber->onWebhookBuild(\$event);
    }

    public function testOnSend(): void
    {
        \$event   = \$this->createMock(SmsSendEvent::class);
        \$contact = \$this->createMock(Lead::class);

        \$event->expects(\$this->once())
            ->method('getSmsId')
            ->willReturn(343);

        \$event->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$contact);

        \$event->expects(\$this->once())
            ->method('getContent')
            ->willReturn('The SMS content.');

        \$this->webhookModel->expects(\$this->once())
            ->method('queueWebhooksByType')
            ->with(
                SmsEvents::SMS_ON_SEND,
                [
                    'smsId'   => 343,
                    'contact' => \$contact,
                    'content' => 'The SMS content.',
                ]
            );

        \$this->subscriber->onSend(\$event);
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
        return "@bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php");
    }
}
