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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce.php */
class __TwigTemplate_74888a75a4fbf21cfa8339f7801a87e6 extends Template
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

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Mailer\\Transport\\BounceProcessorInterface;
use Mautic\\EmailBundle\\Model\\EmailStatModel;
use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class Bounce implements ProcessorInterface
{
    private const RETRY_COUNT = 5;

    /**
     * @var string
     */
    protected \$bouncerAddress;

    /**
     * @var Message
     */
    protected \$message;

    public function __construct(
        protected TransportInterface \$transport,
        protected ContactFinder \$contactFinder,
        protected EmailStatModel \$emailStatModel,
        protected LeadModel \$leadModel,
        protected TranslatorInterface \$translator,
        protected LoggerInterface \$logger,
        protected DoNotContact \$doNotContact
    ) {
    }

    public function process(Message \$message): bool
    {
        \$this->message = \$message;
        \$bounce        = false;

        \$this->logger->debug('MONITORED EMAIL: Processing message ID '.\$this->message->id.' for a bounce');

        // Does the transport have special handling such as Amazon SNS?
        if (\$this->transport instanceof BounceProcessorInterface) {
            try {
                \$bounce = \$this->transport->processBounce(\$this->message);
            } catch (BounceNotFound) {
                // Attempt to parse a bounce the standard way
            }
        }

        if (!\$bounce) {
            try {
                \$bounce = (new Parser(\$this->message))->parse();
            } catch (BounceNotFound) {
                return false;
            }
        }

        \$searchResult = \$this->contactFinder->find(\$bounce->getContactEmail(), \$bounce->getBounceAddress());
        if (!\$contacts = \$searchResult->getContacts()) {
            // No contacts found so bail
            return false;
        }

        \$stat    = \$searchResult->getStat();
        \$channel = 'email';
        if (\$stat) {
            // Update stat entry
            \$this->updateStat(\$stat, \$bounce);

            if (\$stat->getEmail() instanceof Email) {
                // We know the email ID so set it to append to the the DNC record
                \$channel = ['email' => \$stat->getEmail()->getId()];
            }
        }

        \$comments = \$this->translator->trans('mautic.email.bounce.reason.'.\$bounce->getRuleCategory());
        foreach (\$contacts as \$contact) {
            \$this->doNotContact->addDncForContact(\$contact->getId(), \$channel, \\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED, \$comments);
        }

        return true;
    }

    protected function updateStat(Stat \$stat, BouncedEmail \$bouncedEmail)
    {
        \$dtHelper    = new DateTimeHelper();
        \$openDetails = \$stat->getOpenDetails();

        if (!isset(\$openDetails['bounces'])) {
            \$openDetails['bounces'] = [];
        }

        \$openDetails['bounces'][] = [
            'datetime' => \$dtHelper->toUtcString(),
            'reason'   => \$bouncedEmail->getRuleCategory(),
            'code'     => \$bouncedEmail->getRuleNumber(),
            'type'     => \$bouncedEmail->getType(),
        ];

        \$stat->setOpenDetails(\$openDetails);

        \$retryCount = \$stat->getRetryCount();
        ++\$retryCount;
        \$stat->setRetryCount(\$retryCount);

        if (\$bouncedEmail->isFinal() || \$retryCount >= self::RETRY_COUNT) {
            \$stat->setIsFailed(true);
        }

        \$this->emailStatModel->saveEntity(\$stat);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce.php");
    }
}
