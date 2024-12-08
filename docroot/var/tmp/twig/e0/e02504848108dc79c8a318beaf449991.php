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

/* @bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php */
class __TwigTemplate_e350340c3373250694b05554fed962b0 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\FeedbackLoopNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop\\Parser;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Psr\\Log\\LoggerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FeedbackLoop implements ProcessorInterface
{
    private ?Message \$message = null;

    public function __construct(
        private ContactFinder \$contactFinder,
        private TranslatorInterface \$translator,
        private LoggerInterface \$logger,
        private DoNotContactModel \$doNotContact
    ) {
    }

    public function process(Message \$message): bool
    {
        \$this->message = \$message;
        \$this->logger->debug('MONITORED EMAIL: Processing message ID '.\$this->message->id.' for a feedback loop report');

        if (!\$this->isApplicable()) {
            return false;
        }

        try {
            \$parser = new Parser(\$this->message);
            if (!\$contactEmail = \$parser->parse()) {
                // A contact email was not found in the FBL report
                return false;
            }
        } catch (FeedbackLoopNotFound) {
            return false;
        }

        \$this->logger->debug('MONITORED EMAIL: Found '.\$contactEmail.' in feedback loop report');

        \$searchResult = \$this->contactFinder->find(\$contactEmail);
        if (!\$contacts = \$searchResult->getContacts()) {
            return false;
        }

        \$comments = \$this->translator->trans('mautic.email.bounce.reason.spam');
        foreach (\$contacts as \$contact) {
            \$this->doNotContact->addDncForContact(\$contact->getId(), 'email', DoNotContact::UNSUBSCRIBED, \$comments);
        }

        return true;
    }

    protected function isApplicable(): int|bool
    {
        return preg_match('/.*feedback-type: abuse.*/is', \$this->message->fblReport);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php");
    }
}
