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

/* @bundles/EmailBundle/Mailer/Transport/UnsubscriptionProcessorInterface.php */
class __TwigTemplate_9c931adc61a9c0aeb8bac2b6aeaf1bcc extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail;

/**
 * Interface InterfaceUnsubscriptionProcessor.
 */
interface UnsubscriptionProcessorInterface
{
    /**
     * Get the email address that unsubscribed.
     *
     * @throws UnsubscriptionNotFound
     */
    public function processUnsubscription(Message \$message): UnsubscribedEmail;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Mailer/Transport/UnsubscriptionProcessorInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/UnsubscriptionProcessorInterface.php", "/app/docroot/app/bundles/EmailBundle/Mailer/Transport/UnsubscriptionProcessorInterface.php");
    }
}
