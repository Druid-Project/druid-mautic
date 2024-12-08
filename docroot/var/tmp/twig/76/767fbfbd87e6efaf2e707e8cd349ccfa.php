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

/* @bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php */
class __TwigTemplate_0e4e8b05a341d902b23f080a4bec56fd extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;

class MailboxContainer
{
    /**
     * @var array
     */
    protected \$criteria = [];

    /**
     * @var bool
     */
    protected \$markAsSeen = true;

    /**
     * @var array
     */
    protected \$messages = [];

    public function __construct(
        protected ConfigAccessor \$config
    ) {
    }

    public function addCriteria(\$criteria, \$mailbox): void
    {
        if (!isset(\$this->criteria[\$criteria])) {
            \$this->criteria[\$criteria] = [];
        }

        \$this->criteria[\$criteria][] = \$mailbox;
    }

    /**
     * Keep the messages in this mailbox as unseen.
     */
    public function keepAsUnseen(): void
    {
        \$this->markAsSeen = false;
    }

    /**
     * @return bool
     */
    public function shouldMarkAsSeen()
    {
        return \$this->markAsSeen;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return \$this->config->getPath();
    }

    /**
     * @return array
     */
    public function getCriteria()
    {
        return \$this->criteria;
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
        return "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Organizer/MailboxContainer.php");
    }
}
