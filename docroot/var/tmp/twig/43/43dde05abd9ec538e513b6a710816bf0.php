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

/* @bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php */
class __TwigTemplate_0ed7c87458a52904c2074e5717ad5494 extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;

/**
 * Interface InterfaceBounceProcessor.
 */
interface BounceProcessorInterface
{
    /**
     * Get the email address that bounced.
     *
     * @throws BounceNotFound
     */
    public function processBounce(Message \$message): BouncedEmail;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php", "/app/docroot/app/bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php");
    }
}
