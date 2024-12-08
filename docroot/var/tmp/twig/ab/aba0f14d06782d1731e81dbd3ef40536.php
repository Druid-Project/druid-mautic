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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Unsubscribe.php */
class __TwigTemplate_4ff88fd94f9f103590a310ef4dd64b7f extends Template
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

use Mautic\\EmailBundle\\Mailer\\Transport\\UnsubscriptionProcessorInterface;
use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class Unsubscribe implements ProcessorInterface
{
    private ?Message \$message = null;

    public function __construct(
        private TransportInterface \$transport,
        private ContactFinder \$contactFinder,
        private TranslatorInterface \$translator,
        private LoggerInterface \$logger,
        private DoNotContactModel \$doNotContact
    ) {
    }

    public function process(Message \$message): bool
    {
        \$this->message = \$message;
        \$this->logger->debug('MONITORED EMAIL: Processing message ID '.\$this->message->id.' for an unsubscription');

        \$unsubscription = false;

        // Does the transport have special handling like Amazon SNS
        if (\$this->transport instanceof UnsubscriptionProcessorInterface) {
            try {
                \$unsubscription = \$this->transport->processUnsubscription(\$this->message);
            } catch (UnsubscriptionNotFound) {
                // Attempt to parse a unsubscription the standard way
            }
        }

        if (!\$unsubscription) {
            try {
                \$parser         = new Parser(\$message);
                \$unsubscription = \$parser->parse();
            } catch (UnsubscriptionNotFound) {
                // No stat found so bail as we won't consider this a reply
                \$this->logger->debug('MONITORED EMAIL: Unsubscription email was not found');

                return false;
            }
        }

        \$searchResult = \$this->contactFinder->find(\$unsubscription->getContactEmail(), \$unsubscription->getUnsubscriptionAddress());
        if (!\$contacts = \$searchResult->getContacts()) {
            // No contacts found so bail
            return false;
        }

        \$stat    = \$searchResult->getStat();
        \$channel = 'email';
        if (\$stat && \$email = \$stat->getEmail()) {
            // We know the email ID so set it to append to the the DNC record
            \$channel = ['email' => \$email->getId()];
        }

        \$comments = \$this->translator->trans('mautic.email.bounce.reason.unsubscribed');
        foreach (\$contacts as \$contact) {
            \$this->doNotContact->addDncForContact(\$contact->getId(), \$channel, DoNotContact::UNSUBSCRIBED, \$comments);
        }

        return true;
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscribe.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscribe.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Unsubscribe.php");
    }
}
