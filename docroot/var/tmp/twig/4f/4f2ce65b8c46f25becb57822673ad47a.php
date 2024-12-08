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

/* @bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php */
class __TwigTemplate_a6b48dc4953b689a35161a83d96a4a70 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\DateTime\\DateTimeToken;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Event\\PageBuilderEvent;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DateTimeTokenSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private DateTimeToken \$dateTokenHelper,
        private CorePermissions \$security,
        private ContactTracker \$contactTracker
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PageEvents::PAGE_ON_BUILD                     => ['onPageBuild', 0],
            PageEvents::PAGE_ON_DISPLAY                   => ['onPageDisplay', 0],
        ];
    }

    public function onPageBuild(PageBuilderEvent \$event): void
    {
        \$event->addToken('{today}', \$this->translator->trans('mautic.email.token.today'));
    }

    public function onPageDisplay(PageDisplayEvent \$event): void
    {
        \$content   = \$event->getContent();
        \$contact   = \$this->security->isAnonymous() ? \$this->contactTracker->getContact() : null;

        \$tokenList = \$this->dateTokenHelper->getTokens(\$content, \$contact ? \$contact->getTimezone() : null);
        \$event->setContent(str_replace(array_keys(\$tokenList), \$tokenList, \$content));
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
        return "@bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php", "/app/docroot/app/bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php");
    }
}
