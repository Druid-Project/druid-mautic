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

/* @bundles/SmsBundle/Event/ReplyEvent.php */
class __TwigTemplate_508886a9419ff65b76a6bb38381fae59 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Symfony\\Component\\HttpFoundation\\Response;

class ReplyEvent extends \\Symfony\\Contracts\\EventDispatcher\\Event
{
    private ?Response \$response = null;

    private ?LeadEventLog \$eventLog = null;

    /**
     * ReplyEvent constructor.
     *
     * @param string \$message
     */
    public function __construct(
        private Lead \$contact,
        private \$message
    ) {
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return \$this->contact;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    public function setResponse(Response \$response): void
    {
        \$this->response = \$response;
    }

    /**
     * @return Response|null
     */
    public function getResponse()
    {
        return \$this->response;
    }

    public function getEventLog(): ?LeadEventLog
    {
        return \$this->eventLog;
    }

    public function setEventLog(LeadEventLog \$eventLog): void
    {
        \$this->eventLog = \$eventLog;
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
        return "@bundles/SmsBundle/Event/ReplyEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/ReplyEvent.php", "/app/docroot/app/bundles/SmsBundle/Event/ReplyEvent.php");
    }
}
