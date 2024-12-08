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

/* @bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php */
class __TwigTemplate_ba7134a0d01c9f23287436c08d58ea3a extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\FeedbackLoopNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address;

class Parser
{
    public function __construct(
        private Message \$message
    ) {
    }

    /**
     * @return string|null
     *
     * @throws FeedbackLoopNotFound
     */
    public function parse()
    {
        if (null === \$this->message->fblReport) {
            throw new FeedbackLoopNotFound();
        }

        if (\$email = \$this->searchMessage('Original-Rcpt-To: (.*)', \$this->message->fblReport)) {
            return \$email;
        }

        if (\$email = \$this->searchMessage('Received:.*for (.*);.*?', \$this->message->textPlain)) {
            return \$email;
        }

        throw new FeedbackLoopNotFound();
    }

    /**
     * @param string \$content
     * @param string \$pattern
     *
     * @return string|null
     */
    protected function searchMessage(\$pattern, \$content)
    {
        if (preg_match('/'.\$pattern.'/i', \$content, \$match)) {
            if (\$parsedAddressList = Address::parseList(\$match[1])) {
                return key(\$parsedAddressList);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php");
    }
}
