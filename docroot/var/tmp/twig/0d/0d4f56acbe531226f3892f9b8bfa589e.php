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

/* @bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php */
class __TwigTemplate_d65695f8c9de497c50c0353d12d307cc extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Organizer;

use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;

class MailboxOrganizer
{
    /**
     * @var MailboxContainer[]
     */
    protected \$containers = [];

    public function __construct(
        protected ParseEmailEvent \$event,
        protected array \$mailboxes
    ) {
    }

    /**
     * Organize the mailboxes into containers by IMAP connection and criteria.
     */
    public function organize(): void
    {
        \$criteriaRequested      = \$this->event->getCriteriaRequests();
        \$markAsSeenInstructions = \$this->event->getMarkAsSeenInstructions();

        /**
         * @var string         \$name
         * @var ConfigAccessor \$config
         */
        foreach (\$this->mailboxes as \$name => \$config) {
            // Switch mailbox to get information
            if (!\$config->isConfigured()) {
                // Not configured so continue
                continue;
            }

            \$criteria   = \$criteriaRequested[\$name] ?? Mailbox::CRITERIA_UNSEEN;
            \$markAsSeen = \$markAsSeenInstructions[\$name] ?? true;

            \$container = \$this->getContainer(\$config);
            if (!\$markAsSeen) {
                // Keep all the messages fetched from this folder as unseen
                \$container->keepAsUnseen();
            }

            \$container->addCriteria(\$criteria, \$name);
        }
    }

    /**
     * @return MailboxContainer[]
     */
    public function getContainers()
    {
        return \$this->containers;
    }

    /**
     * @return MailboxContainer
     */
    protected function getContainer(ConfigAccessor \$config)
    {
        \$key = \$config->getKey();
        if (!isset(\$this->containers[\$key])) {
            \$this->containers[\$key] = new MailboxContainer(\$config);
        }

        return \$this->containers[\$key];
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
        return "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php");
    }
}
