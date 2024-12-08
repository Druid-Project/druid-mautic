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

/* @bundles/LeadBundle/Event/LeadUtmTagsEvent.php */
class __TwigTemplate_9cadaa31812442d633150356fa222df0 extends Template
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

class LeadUtmTagsEvent extends CommonEvent
{
    /**
     * @param mixed[] \$utmtags
     */
    public function __construct(
        Lead \$lead,
        protected array \$utmtags
    ) {
        \$this->entity  = \$lead;
    }

    public function getLead(): Lead
    {
        return \$this->entity;
    }

    /**
     * Returns the new points.
     *
     * @return mixed[]
     */
    public function getUtmTags(): array
    {
        return \$this->utmtags;
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
        return "@bundles/LeadBundle/Event/LeadUtmTagsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadUtmTagsEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadUtmTagsEvent.php");
    }
}
