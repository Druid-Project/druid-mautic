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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Transport/TestTransport.php */
class __TwigTemplate_41bfa3dd6dbe3de1100cf2194ed235ec extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Transport;

use Mautic\\EmailBundle\\Mailer\\Transport\\BounceProcessorInterface;
use Mautic\\EmailBundle\\Mailer\\Transport\\UnsubscriptionProcessorInterface;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail;
use Symfony\\Component\\Mailer\\Envelope;
use Symfony\\Component\\Mailer\\SentMessage;
use Symfony\\Component\\Mailer\\Transport\\NullTransport;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Component\\Mime\\RawMessage;

class TestTransport implements TransportInterface, BounceProcessorInterface, UnsubscriptionProcessorInterface
{
    private NullTransport \$nullTransport;

    public function __construct()
    {
        \$this->nullTransport = new NullTransport();
    }

    public function send(RawMessage \$message, Envelope \$envelope = null): ?SentMessage
    {
        return \$this->nullTransport->send(\$message, \$envelope);
    }

    public function __toString(): string
    {
        return (string) \$this->nullTransport;
    }

    public function processBounce(Message \$message): BouncedEmail
    {
        return new BouncedEmail();
    }

    public function processUnsubscription(Message \$message): UnsubscribedEmail
    {
        return new UnsubscribedEmail('contact@email.com', 'test+unsubscribe_123abc@test.com');
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Transport/TestTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Transport/TestTransport.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Transport/TestTransport.php");
    }
}
