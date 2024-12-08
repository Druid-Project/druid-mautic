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

/* @bundles/EmailBundle/EventListener/ProcessReplySubscriber.php */
class __TwigTemplate_664e437f3be1f2138ef14b8fceff26b1 extends Template
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

use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ProcessReplySubscriber implements EventSubscriberInterface
{
    public const BUNDLE     = 'EmailBundle';

    public const FOLDER_KEY = 'replies';

    public const CACHE_KEY  = self::BUNDLE.'_'.self::FOLDER_KEY;

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::MONITORED_EMAIL_CONFIG => ['onEmailConfig', 0],
            EmailEvents::EMAIL_PRE_FETCH        => ['onEmailPreFetch', 0],
            EmailEvents::EMAIL_PARSE            => ['onEmailParse', 1],
        ];
    }

    public function __construct(
        private Reply \$replier,
        private CacheStorageHelper \$cache
    ) {
    }

    public function onEmailConfig(MonitoredEmailEvent \$event): void
    {
        \$event->addFolder(self::BUNDLE, self::FOLDER_KEY, 'mautic.email.config.monitored_email.reply_folder');
    }

    public function onEmailPreFetch(ParseEmailEvent \$event): void
    {
        if (!\$lastFetchedUID = \$this->cache->get(self::CACHE_KEY)) {
            return;
        }

        \$startingUID = \$lastFetchedUID + 1;

        // Using * will return the last UID even if the starting UID doesn't exist so let's just use a highball number
        \$endingUID = \$startingUID + 1_000_000_000;

        \$event->setCriteriaRequest(self::BUNDLE, self::FOLDER_KEY, Mailbox::CRITERIA_UID.\" \$startingUID:\$endingUID\");
    }

    public function onEmailParse(ParseEmailEvent \$event): void
    {
        if (\$event->isApplicable(self::BUNDLE, self::FOLDER_KEY)) {
            // Process the messages
            if (\$messages = \$event->getMessages()) {
                foreach (\$messages as \$message) {
                    \$this->replier->process(\$message);
                }

                // Store the last UID
                \$this->cache->set(self::CACHE_KEY, \$message->id);
            }
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
        return "@bundles/EmailBundle/EventListener/ProcessReplySubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ProcessReplySubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/ProcessReplySubscriber.php");
    }
}
