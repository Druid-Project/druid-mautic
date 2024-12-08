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

/* @bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php */
class __TwigTemplate_1f3441a150dd62cc0c91c06f30bd7d47 extends Template
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

use Mautic\\EmailBundle\\Mailer\\Message\\MauticMessage;
use Symfony\\Component\\Mailer\\Envelope;
use Symfony\\Component\\Mailer\\SentMessage;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Component\\Mime\\Email;
use Symfony\\Component\\Mime\\RawMessage;

class BcInterfaceTokenTransport implements TransportInterface
{
    /**
     * @var array<string, mixed>
     */
    private \$transports = []; // @phpstan-ignore-line

    /**
     * @var string[]
     */
    private \$fromAddresses = [];

    /**
     * @var string[]
     */
    private \$fromNames = [];

    private \$numberToFail;

    /**
     * @var mixed[]
     */
    private array \$metadatas = [];

    /**
     * @var RawMessage
     */
    private \$message;

    /**
     * @param bool \$validate
     */
    public function __construct(
        private \$validate = false,
        \$numberToFail = 1
    ) {
        \$this->numberToFail       = (int) \$numberToFail;
        \$this->transports['main'] = \$this;
    }

    public function send(RawMessage \$message, Envelope \$envelope = null): ?SentMessage
    {
        if (\$message instanceof Email) {
            \$this->fromAddresses[] = !empty(\$message->getFrom()) ? \$message->getFrom()[0]->getAddress() : null;
            \$this->fromNames[]     = !empty(\$message->getFrom()) ? \$message->getFrom()[0]->getName() : null;
        }

        \$this->message     = \$message;
        \$this->metadatas[] = \$this->getMetadata();

        return null;
    }

    /**
     * @return string[]
     */
    public function getFromAddresses(): array
    {
        return \$this->fromAddresses;
    }

    /**
     * @return string[]
     */
    public function getFromNames(): array
    {
        return \$this->fromNames;
    }

    /**
     * @return mixed[]
     */
    public function getMetadatas(): array
    {
        return \$this->metadatas;
    }

    public function getMetadata(): array
    {
        return (\$this->message instanceof MauticMessage) ? \$this->message->getMetadata() : [];
    }

    public function __toString(): string
    {
        return 'BcInterface';
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
        return "@bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php");
    }
}
