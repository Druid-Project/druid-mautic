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

/* @bundles/NotificationBundle/Event/NotificationSendEvent.php */
class __TwigTemplate_d8781366bebb76a07d6d89cf136c11cc extends Template
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

namespace Mautic\\NotificationBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;

class NotificationSendEvent extends CommonEvent
{
    /**
     * @param string \$message
     */
    public function __construct(
        protected \$message,
        protected \$heading,
        protected Lead \$lead
    ) {
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * @param string \$message
     */
    public function setMessage(\$message): void
    {
        \$this->message = \$message;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return \$this->heading;
    }

    /**
     * @param mixed \$heading
     *
     * @return NotificationSendEvent
     */
    public function setHeading(\$heading)
    {
        \$this->heading = \$heading;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
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
        return "@bundles/NotificationBundle/Event/NotificationSendEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/NotificationSendEvent.php", "/app/docroot/app/bundles/NotificationBundle/Event/NotificationSendEvent.php");
    }
}
