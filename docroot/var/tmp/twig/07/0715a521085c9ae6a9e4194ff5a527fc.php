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

/* @bundles/PointBundle/Event/TriggerExecutedEvent.php */
class __TwigTemplate_ca72fd3ee81392111773d20e8f65e287 extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\TriggerEvent as TriggerEventEntity;
use Symfony\\Contracts\\EventDispatcher\\Event;

class TriggerExecutedEvent extends Event
{
    private ?bool \$result = null;

    public function __construct(
        private TriggerEventEntity \$triggerEvent,
        private Lead \$lead
    ) {
    }

    /**
     * @return TriggerEventEntity
     */
    public function getTriggerEvent()
    {
        return \$this->triggerEvent;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return \$this->result;
    }

    public function setSucceded(): void
    {
        \$this->result = true;
    }

    public function setFailed(): void
    {
        \$this->result = false;
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
        return "@bundles/PointBundle/Event/TriggerExecutedEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/TriggerExecutedEvent.php", "/app/docroot/app/bundles/PointBundle/Event/TriggerExecutedEvent.php");
    }
}
