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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php */
class __TwigTemplate_9b9d849397f570c2a3a01938e97295aa extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\ReplyNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;

class Parser
{
    public function __construct(
        private Message \$message
    ) {
    }

    /**
     * Only sure way is to parse the content for the stat ID otherwise attempt the from.
     *
     * @throws ReplyNotFound
     */
    public function parse(): RepliedEmail
    {
        if (!preg_match('/email\\/([a-zA-Z0-9]+)\\.gif/', \$this->message->textHtml, \$parts)) {
            throw new ReplyNotFound();
        }

        \$hashId = \$parts[1];

        return new RepliedEmail(\$this->message->fromAddress, \$hashId);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php");
    }
}
