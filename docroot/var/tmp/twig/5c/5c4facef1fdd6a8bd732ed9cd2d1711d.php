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

/* @bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php */
class __TwigTemplate_7291273a9bd14236c1ad7e45da99eaa6 extends Template
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

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Symfony\\Contracts\\EventDispatcher\\Event;

class LeadListQueryBuilderGeneratedEvent extends Event
{
    public function __construct(
        private LeadList \$segment,
        private QueryBuilder \$queryBuilder
    ) {
    }

    /**
     * @return LeadList
     */
    public function getSegment()
    {
        return \$this->segment;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
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
        return "@bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php");
    }
}
