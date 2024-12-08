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

/* @bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php */
class __TwigTemplate_0744b736a418c8bc1382dbcfbce0ad57 extends Template
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

namespace Mautic\\MessengerBundle\\MessageHandler;

use Doctrine\\DBAL\\Exception\\RetryableException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\MessengerBundle\\Message\\EmailHitNotification;
use Symfony\\Component\\Messenger\\Exception\\RecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Handler\\Acknowledger;
use Symfony\\Component\\Messenger\\Handler\\MessageHandlerInterface;

class EmailHitNotificationHandler implements MessageHandlerInterface
{
    private bool \$isSyncTransport;

    public function __construct(
        private EmailModel \$emailModel,
        CoreParametersHelper \$parametersHelper
    ) {
        \$this->isSyncTransport = str_starts_with(\$parametersHelper->get('messenger_dsn_hit'), 'sync://');
    }

    public function __invoke(EmailHitNotification \$message, Acknowledger \$ack = null): void
    {
        try {
            \$this->emailModel->hitEmail(
                \$message->getStatId(),
                \$message->getRequest(),
                false,
                \$this->isSyncTransport,
                \$message->getEventTime(),
                true
            );
        } catch (RetryableException \$e) {
            throw new RecoverableMessageHandlingException(\$e->getMessage());
        }
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
        return "@bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php";
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
        return new Source("", "@bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php", "/app/docroot/app/bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php");
    }
}
