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

/* @bundles/LeadBundle/EventListener/EmailSubscriber.php */
class __TwigTemplate_a7542a1df068a0e09e53680dff895386 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Helper\\BuilderTokenHelperFactory;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailBuilderEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\LeadBundle\\Helper\\TokenHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class EmailSubscriber implements EventSubscriberInterface
{
    private static string \$contactFieldRegex = '{contactfield=(.*?)}';

    public function __construct(
        private BuilderTokenHelperFactory \$builderTokenHelperFactory
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::EMAIL_ON_BUILD                     => ['onEmailBuild', 0],
            EmailEvents::EMAIL_ON_SEND                      => ['onEmailGenerate', 0],
            EmailEvents::EMAIL_ON_DISPLAY                   => ['onEmailDisplay', 0],
            EmailEvents::ON_EMAIL_ADDRESS_TOKEN_REPLACEMENT => ['onEmailAddressReplacement', 0],
        ];
    }

    public function onEmailBuild(EmailBuilderEvent \$event): void
    {
        \$tokenHelper = \$this->builderTokenHelperFactory->getBuilderTokenHelper('lead.field', 'lead:fields', 'MauticLeadBundle');
        // the permissions are for viewing contact data, not for managing contact fields
        \$tokenHelper->setPermissionSet(['lead:leads:viewown', 'lead:leads:viewother']);

        if (\$event->tokensRequested(self::\$contactFieldRegex)) {
            \$event->addTokensFromHelper(\$tokenHelper, self::\$contactFieldRegex, 'label', 'alias');
        }
    }

    public function onEmailDisplay(EmailSendEvent \$event): void
    {
        \$this->onEmailGenerate(\$event);
    }

    public function onEmailGenerate(EmailSendEvent \$event): void
    {
        // Combine all possible content to find tokens across them
        \$content = \$event->getSubject();
        \$content .= \$event->getContent();
        \$content .= \$event->getPlainText();
        \$content .= implode(' ', \$event->getTextHeaders());

        \$lead = \$event->getLead();

        \$tokenList = TokenHelper::findLeadTokens(\$content, \$lead);
        if (count(\$tokenList)) {
            \$event->addTokens(\$tokenList);
            unset(\$tokenList);
        }
    }

    public function onEmailAddressReplacement(TokenReplacementEvent \$event): void
    {
        \$event->setContent(TokenHelper::findLeadTokens(\$event->getContent(), \$event->getLead()->getProfileFields(), true));
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
        return "@bundles/LeadBundle/EventListener/EmailSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/EmailSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/EmailSubscriber.php");
    }
}
