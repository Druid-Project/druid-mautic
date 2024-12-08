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

/* @bundles/SmsBundle/EventListener/MessageQueueSubscriber.php */
class __TwigTemplate_1dcff6e7ba5dc0701d73f72ba5c36484 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\ChannelBundle\\Event\\MessageQueueBatchProcessEvent;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class MessageQueueSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SmsModel \$model
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::PROCESS_MESSAGE_QUEUE_BATCH => ['onProcessMessageQueueBatch', 0],
        ];
    }

    /**
     * Sends campaign emails.
     */
    public function onProcessMessageQueueBatch(MessageQueueBatchProcessEvent \$event): void
    {
        if (!\$event->checkContext('sms')) {
            return;
        }

        \$messages          = \$event->getMessages();
        \$id                = \$event->getChannelId();
        \$sms               = \$this->model->getEntity(\$id);
        \$sendTo            = [];
        \$messagesByContact = [];

        /** @var MessageQueue \$message */
        foreach (\$messages as \$message) {
            if (\$sms && \$message->getLead() && \$sms->isPublished()) {
                \$contact = \$message->getLead();
                \$mobile  = \$contact->getMobile();
                \$phone   = \$contact->getPhone();
                if (empty(\$mobile) && empty(\$phone)) {
                    \$message->setProcessed();
                    \$message->setSuccess();
                }
                \$sendTo[\$contact->getId()]            = \$contact;
                \$messagesByContact[\$contact->getId()] = \$message;
            } else {
                \$message->setFailed();
            }
        }

        if (count(\$sendTo)) {
            \$options['resend_message_queue'] = \$messagesByContact;
            \$results                         = \$this->model->sendSms(\$sms, \$sendTo, \$options);

            foreach (\$messagesByContact as \$contactId => \$message) {
                if (!\$message->isProcessed()) {
                    \$message->setProcessed();
                    \$message->setMetadata(\$results[\$contactId]);
                    if (\$results[\$contactId]['sent']) {
                        \$message->setSuccess();
                    }
                }
            }
        }

        \$event->stopPropagation();
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
        return "@bundles/SmsBundle/EventListener/MessageQueueSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/MessageQueueSubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/MessageQueueSubscriber.php");
    }
}
