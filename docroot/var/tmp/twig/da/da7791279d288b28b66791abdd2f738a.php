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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Address.php */
class __TwigTemplate_f229fc349de7c83f1d9b76e18b41ef80 extends Template
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

class Address
{
    /**
     * @param string \$addresses String of email address from an email header
     */
    public static function parseList(\$addresses): array
    {
        \$results         = [];
        \$parsedAddresses = imap_rfc822_parse_adrlist(\$addresses, 'default.domain.name');
        foreach (\$parsedAddresses as \$parsedAddress) {
            if (
                isset(\$parsedAddress->host)
                && '.SYNTAX-ERROR.' != \$parsedAddress->host
                && 'default.domain.name' != \$parsedAddress->host
            ) {
                \$email           = \$parsedAddress->mailbox.'@'.\$parsedAddress->host;
                \$name            = \$parsedAddress->personal ?? null;
                \$results[\$email] = \$name;
            }
        }

        return \$results;
    }

    public static function parseAddressForStatHash(\$address): ?string
    {
        if (preg_match('#^(.*?)\\+(.*?)@(.*?)\$#', \$address, \$parts)) {
            if (strstr(\$parts[2], '_')) {
                // Has an ID hash so use it to find the lead
                [\$ignore, \$hashId] = explode('_', \$parts[2]);

                return \$hashId;
            }
        }

        return null;
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Address.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Address.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Address.php");
    }
}
