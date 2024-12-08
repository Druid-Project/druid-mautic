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

/* @bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php */
class __TwigTemplate_07664ae633103ee193649790e215bfc1 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper\\Transport;

use Symfony\\Component\\Mailer\\Envelope;
use Symfony\\Component\\Mailer\\SentMessage;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Component\\Mime\\Email;
use Symfony\\Component\\Mime\\RawMessage;

class SmtpTransport implements TransportInterface
{
    /**
     * @var array<string, mixed>
     */
    private \$transports = []; // @phpstan-ignore-line

    public Email \$sentMessage;

    public function __construct()
    {
        \$this->transports['main'] = \$this;
    }

    public function send(RawMessage \$message, Envelope \$envelope = null): ?SentMessage
    {
        if (\$message instanceof Email) {
            \$this->sentMessage = clone \$message;
        }

        return null;
    }

    public function __toString(): string
    {
        return 'null://';
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
        return "@bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php");
    }
}
