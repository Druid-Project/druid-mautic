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

/* @bundles/WebhookBundle/Notificator/WebhookKillNotificator.php */
class __TwigTemplate_c4e0256fabe0696ab80fbefc260892b8 extends Template
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

namespace Mautic\\WebhookBundle\\Notificator;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class WebhookKillNotificator
{
    public function __construct(
        private TranslatorInterface \$translator,
        private Router \$router,
        private NotificationModel \$notificationModel,
        private EntityManager \$entityManager,
        private MailHelper \$mailer,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @param string \$reason Translatable key
     */
    public function send(Webhook \$webhook, \$reason): void
    {
        \$subject = \$this->translator->trans('mautic.webhook.stopped');
        \$reason  = \$this->translator->trans(\$reason);
        \$htmlUrl = '<a href=\"'.\$this->router->generate(
            'mautic_webhook_action',
            ['objectAction' => 'view', 'objectId' => \$webhook->getId()],
            UrlGeneratorInterface::ABSOLUTE_URL
        ).'\" data-toggle=\"ajax\">'.\$webhook->getName().'</a>';

        \$details = \$this->translator->trans(
            'mautic.webhook.stopped.details',
            [
                '%reason%'  => \$reason,
                '%webhook%' => \$htmlUrl,
            ]
        );

        /** @var User \$owner */
        \$owner = \$toUser = \$this->entityManager->getReference(User::class, \$webhook->getCreatedBy());

        \$ccToUser = null;

        if (null !== \$webhook->getModifiedBy() && \$webhook->getCreatedBy() !== \$webhook->getModifiedBy()) {
            \$modifiedBy = \$this->entityManager->getReference(User::class, \$webhook->getModifiedBy());

            \$toUser   = \$modifiedBy; // Send notification to modifier
            \$ccToUser = \$owner; // And cc e-mail to owner
        }

        // Send notification
        \$this->notificationModel->addNotification(
            \$details,
            'error',
            false,
            \$subject,
            null,
            null,
            \$toUser
        );

        // Send e-mail
        \$mailer = \$this->mailer;

        \$sendToAuthor = \$this->coreParametersHelper->get('webhook_send_notification_to_author', 1);
        if (\$sendToAuthor) {
            \$mailer->setTo(\$toUser->getEmail());
            if (\$ccToUser) {
                \$mailer->setCc([\$ccToUser->getEmail() => null]);
            }
        } else {
            \$emailAddresses = array_map('trim', explode(',', \$this->coreParametersHelper->get('webhook_notification_email_addresses')));
            \$mailer->setTo(\$emailAddresses);
        }

        \$mailer->setSubject(\$subject);
        \$mailer->setBody(\$details);
        \$mailer->send(true);
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
        return "@bundles/WebhookBundle/Notificator/WebhookKillNotificator.php";
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
        return new Source("", "@bundles/WebhookBundle/Notificator/WebhookKillNotificator.php", "/app/docroot/app/bundles/WebhookBundle/Notificator/WebhookKillNotificator.php");
    }
}
