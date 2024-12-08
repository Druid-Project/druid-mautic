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

/* @bundles/EmailBundle/Mailer/Transport/InvalidTransport.php */
class __TwigTemplate_fb9be6a882ba22d22ddb23affa533078 extends Template
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

declare(strict_types=1);

namespace Mautic\\EmailBundle\\Mailer\\Transport;

use Symfony\\Component\\Mailer\\Envelope;
use Symfony\\Component\\Mailer\\Exception\\TransportException;
use Symfony\\Component\\Mailer\\SentMessage;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Component\\Mime\\RawMessage;

class InvalidTransport implements TransportInterface
{
    public function send(RawMessage \$message, Envelope \$envelope = null): ?SentMessage
    {
        throw new TransportException('Unknown DSN scheme. Please make sure the mailer DSN is configured properly.');
    }

    public function __toString(): string
    {
        return 'invalid://';
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
        return "@bundles/EmailBundle/Mailer/Transport/InvalidTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/InvalidTransport.php", "/app/docroot/app/bundles/EmailBundle/Mailer/Transport/InvalidTransport.php");
    }
}
