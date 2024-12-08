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

/* @bundles/EmailBundle/Tests/Helper/Transport/BatchTransport.php */
class __TwigTemplate_9b17723cca8f561581bc42b01f8c4b60 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper\\Transport;

use Mautic\\EmailBundle\\Mailer\\Message\\MauticMessage;
use Mautic\\EmailBundle\\Mailer\\Transport\\TokenTransportInterface;
use Mautic\\EmailBundle\\Mailer\\Transport\\TokenTransportTrait;
use Symfony\\Component\\Mailer\\Exception\\TransportException;
use Symfony\\Component\\Mailer\\SentMessage;
use Symfony\\Component\\Mailer\\Transport\\AbstractTransport;

class BatchTransport extends AbstractTransport implements TokenTransportInterface
{
    use TokenTransportTrait;

    /**
     * @var array<string, mixed>
     */
    private \$transports = []; // @phpstan-ignore-line

    private \$metadatas  = [];

    /**
     * @var string[]
     */
    private array \$fromAddresses = [];

    /**
     * @var string[]
     */
    private array \$fromNames = [];

    public function __construct(private bool \$validate = false, private int \$maxRecipients = 4, private int \$numberToFail = 1)
    {
        \$this->transports['main'] = \$this;
    }

    public function __toString(): string
    {
        return 'batch://';
    }

    protected function doSend(SentMessage \$message): void
    {
        \$message = \$message->getOriginalMessage();

        if (!\$message instanceof MauticMessage) {
            return;
        }

        \$this->metadatas[] = \$message->getMetadata();

        if (\$this->validate && \$this->numberToFail) {
            --\$this->numberToFail;

            if (!\$message->getSubject()) {
                throw new TransportException('Subject empty');
            }
        }

        \$this->fromAddresses[] = !empty(\$message->getFrom()) ? \$message->getFrom()[0]->getAddress() : null;
        \$this->fromNames[]     = !empty(\$message->getFrom()) ? \$message->getFrom()[0]->getName() : null;
    }

    public function getMaxBatchLimit(): int
    {
        return \$this->maxRecipients;
    }

    public function getMetadatas(): array
    {
        return \$this->metadatas;
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
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Tests/Helper/Transport/BatchTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/Transport/BatchTransport.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/Transport/BatchTransport.php");
    }
}
