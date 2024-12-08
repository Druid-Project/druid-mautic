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

/* @bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php */
class __TwigTemplate_9009a970cd083fd7cf02ae5e1d48b173 extends Template
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

namespace Mautic\\DynamicContentBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class ContactFiltersEvaluateEvent extends Event
{
    private bool \$isEvaluated = false;

    private bool \$isMatched   = false;

    /**
     * @param mixed[] \$filters
     */
    public function __construct(
        private array \$filters,
        private Lead \$contact
    ) {
    }

    public function isMatch(): bool
    {
        return \$this->isEvaluated() && \$this->isMatched;
    }

    public function isEvaluated(): bool
    {
        return \$this->isEvaluated;
    }

    public function setIsEvaluated(bool \$evaluated): ContactFiltersEvaluateEvent
    {
        \$this->isEvaluated = \$evaluated;

        return \$this;
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }

    public function setContact(Lead \$contact): ContactFiltersEvaluateEvent
    {
        \$this->contact = \$contact;

        return \$this;
    }

    /**
     * @return mixed[]
     */
    public function getFilters(): array
    {
        return \$this->filters;
    }

    public function isMatched(): bool
    {
        return \$this->isMatched;
    }

    public function setIsMatched(bool \$isMatched): ContactFiltersEvaluateEvent
    {
        \$this->isMatched = \$isMatched;

        return \$this;
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
        return "@bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php", "/app/docroot/app/bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php");
    }
}
