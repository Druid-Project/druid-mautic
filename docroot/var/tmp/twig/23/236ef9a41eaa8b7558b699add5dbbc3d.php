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

/* @bundles/LeadBundle/Event/LeadNoteEvent.php */
class __TwigTemplate_d97ec4fb99b6900b726c2e8957fbe27a extends Template
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
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadNote;

class LeadNoteEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(LeadNote \$note, \$isNew = false)
    {
        \$this->entity = \$note;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the LeadNote entity.
     *
     * @return LeadNote
     */
    public function getNote()
    {
        return \$this->entity;
    }

    /**
     * Sets the LeadNote entity.
     */
    public function setLeadNote(LeadNote \$note): void
    {
        \$this->entity = \$note;
    }

    /**
     * Returns the Lead.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->entity->getLead();
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
        return "@bundles/LeadBundle/Event/LeadNoteEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadNoteEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadNoteEvent.php");
    }
}
