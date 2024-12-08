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

/* @bundles/EmailBundle/EventListener/DateTimeTokenSubscriber.php */
class __TwigTemplate_8f62b464780ef9e0fe35849a92dd46a6 extends Template
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

use Mautic\\CoreBundle\\Helper\\DateTime\\DateTimeToken;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailBuilderEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DateTimeTokenSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private DateTimeToken \$dateTokenHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::EMAIL_ON_BUILD                     => ['onEmailBuild', 0],
            EmailEvents::EMAIL_ON_SEND                      => ['onEmailGenerate', 0],
            EmailEvents::EMAIL_ON_DISPLAY                   => ['onEmailDisplay', 0],
        ];
    }

    public function onEmailBuild(EmailBuilderEvent \$event): void
    {
        \$event->addToken('{today}', \$this->translator->trans('mautic.email.token.today'));
    }

    public function onEmailDisplay(EmailSendEvent \$event): void
    {
        \$this->onEmailGenerate(\$event);
    }

    public function onEmailGenerate(EmailSendEvent \$event): void
    {
        \$content = \$event->getSubject();
        \$content .= \$event->getContent();
        \$content .= \$event->getPlainText();
        \$content .= implode(' ', \$event->getTextHeaders());

        \$leadArray       = \$event->getLead();
        \$contactTimezone = \$event->isInternalSend() || !is_array(\$leadArray) ? null : (\$leadArray['timezone'] ?? null);
        \$tokenList       = \$this->dateTokenHelper->getTokens(\$content, \$contactTimezone);
        if (count(\$tokenList)) {
            \$event->addTokens(\$tokenList);
            unset(\$tokenList);
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
        return "@bundles/EmailBundle/EventListener/DateTimeTokenSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/DateTimeTokenSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/DateTimeTokenSubscriber.php");
    }
}
