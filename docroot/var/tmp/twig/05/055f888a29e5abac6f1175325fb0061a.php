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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php */
class __TwigTemplate_dae1cbd1f24067decf8b257dc887c02c extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;

class Parser
{
    public function __construct(
        protected Message \$message
    ) {
    }

    /**
     * @throws UnsubscriptionNotFound
     */
    public function parse(): UnsubscribedEmail
    {
        \$unsubscriptionEmail = null;
        foreach (\$this->message->to as \$to => \$name) {
            if (str_contains(\$to, '+unsubscribe')) {
                \$unsubscriptionEmail = \$to;

                break;
            }
        }

        if (!\$unsubscriptionEmail) {
            throw new UnsubscriptionNotFound();
        }

        return new UnsubscribedEmail(\$this->message->fromAddress, \$unsubscriptionEmail);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php");
    }
}
