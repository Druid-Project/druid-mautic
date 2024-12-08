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

/* @bundles/EmailBundle/Event/QueueEmailEvent.php */
class __TwigTemplate_0bcc49ad23d138945e3313a6ad6bcf16 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\EmailBundle\\Mailer\\Message\\MauticMessage;
use Symfony\\Contracts\\EventDispatcher\\Event;

class QueueEmailEvent extends Event
{
    private bool \$retry = false;

    public function __construct(
        private MauticMessage \$message
    ) {
    }

    /**
     * @return MauticMessage
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Sets whether the sending of the message should be tried again.
     */
    public function tryAgain(): void
    {
        \$this->retry = true;
    }

    public function shouldTryAgain(): bool
    {
        return \$this->retry;
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
        return "@bundles/EmailBundle/Event/QueueEmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/QueueEmailEvent.php", "/app/docroot/app/bundles/EmailBundle/Event/QueueEmailEvent.php");
    }
}
