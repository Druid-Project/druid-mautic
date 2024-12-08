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

/* @bundles/LeadBundle/Event/LeadFieldEvent.php */
class __TwigTemplate_bcb99d6deefa4d4464000a7a6c6803cc extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\LeadField;

class LeadFieldEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(LeadField &\$field, \$isNew = false)
    {
        \$this->entity = &\$field;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Field entity.
     *
     * @return LeadField
     */
    public function getField()
    {
        return \$this->entity;
    }

    /**
     * Sets the LeadField entity.
     */
    public function setField(LeadField \$field): void
    {
        \$this->entity = \$field;
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
        return "@bundles/LeadBundle/Event/LeadFieldEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadFieldEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadFieldEvent.php");
    }
}
