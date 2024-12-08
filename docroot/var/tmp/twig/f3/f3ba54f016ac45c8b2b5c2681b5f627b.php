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

/* @bundles/LeadBundle/Event/CompanyEvent.php */
class __TwigTemplate_7df166ad71cadb8fab388296ac98a148 extends Template
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
use Mautic\\LeadBundle\\Entity\\Company;

class CompanyEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     * @param int  \$score
     */
    public function __construct(
        Company \$company,
        \$isNew = false,
        protected \$score = 0
    ) {
        \$this->entity = \$company;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Company entity.
     *
     * @return Company
     */
    public function getCompany()
    {
        return \$this->entity;
    }

    /**
     * Sets the Company entity.
     */
    public function setCompany(Company \$company): void
    {
        \$this->entity = \$company;
    }

    public function changeScore(\$score): void
    {
        \$this->score = \$score;
    }

    public function getScore()
    {
        return \$this->score;
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
        return "@bundles/LeadBundle/Event/CompanyEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/CompanyEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/CompanyEvent.php");
    }
}
