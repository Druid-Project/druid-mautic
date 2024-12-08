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

/* @bundles/EmailBundle/EventListener/MessageQueueSubscriber.php */
class __TwigTemplate_6b27556f6bb7e98f608ef2797865d613 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\ChannelBundle\\Event\\MessageQueueBatchProcessEvent;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class MessageQueueSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EmailModel \$emailModel
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
        if (!\$event->checkContext('email')) {
            return;
        }

        \$messages = \$event->getMessages();
        \$emailId  = \$event->getChannelId();
        \$email    = \$this->emailModel->getEntity(\$emailId);

        \$sendTo            = [];
        \$messagesByContact = [];
        \$options           = [
            'email_type' => MailHelper::EMAIL_TYPE_MARKETING,
        ];

        /** @var MessageQueue \$message */
        foreach (\$messages as \$message) {
            if (!(\$email && \$message->getLead() && \$email->isPublished())) {
                \$message->setFailed();
                continue;
            }

            \$contact = \$message->getLead()->getProfileFields();
            if (empty(\$contact['email'])) {
                // No email so just let this slide
                \$message->setProcessed();
                \$message->setSuccess();
            }
            \$sendTo[\$contact['id']]            = \$contact;
            \$messagesByContact[\$contact['id']] = \$message;
        }

        if (count(\$sendTo)) {
            \$options['resend_message_queue'] = \$messagesByContact;
            \$errors                          = \$this->emailModel->sendEmail(\$email, \$sendTo, \$options);

            // Let's see who was successful
            foreach (\$messagesByContact as \$contactId => \$message) {
                // If the message is processed, it was rescheduled by sendEmail
                if (\$message->isProcessed()) {
                    continue;
                }

                \$message->setProcessed();
                if (empty(\$errors[\$contactId])) {
                    \$message->setSuccess();
                    continue;
                }

                // Setting it to failed so it could be rescheduled
                // by MessageQueueModel::processMessageQueue.
                // We will get job loops otherwise.
                \$message->setFailed();
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
        return "@bundles/EmailBundle/EventListener/MessageQueueSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/MessageQueueSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/MessageQueueSubscriber.php");
    }
}
