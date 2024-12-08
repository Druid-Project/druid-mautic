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

/* @bundles/LeadBundle/Event/LeadChangeEvent.php */
class __TwigTemplate_11e6e86234d6d1553850b1f0f6efda41 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class LeadChangeEvent extends Event
{
    public function __construct(
        private Lead \$oldLead,
        private \$oldTrackingId,
        private Lead \$newLead,
        private \$newTrackingId
    ) {
    }

    /**
     * @return Lead
     */
    public function getOldLead()
    {
        return \$this->oldLead;
    }

    /**
     * @return mixed
     */
    public function getOldTrackingId()
    {
        return \$this->oldTrackingId;
    }

    /**
     * @return Lead
     */
    public function getNewLead()
    {
        return \$this->newLead;
    }

    /**
     * @return mixed
     */
    public function getNewTrackingId()
    {
        return \$this->newTrackingId;
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
        return "@bundles/LeadBundle/Event/LeadChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadChangeEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadChangeEvent.php");
    }
}
