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

/* @bundles/LeadBundle/Event/CompanyMergeEvent.php */
class __TwigTemplate_d18b69b5d043c644186e262b3d3de046 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Company;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class CompanyMergeEvent extends Event
{
    public function __construct(
        private Company \$victor,
        private Company \$loser
    ) {
    }

    /**
     * Returns the victor (loser merges into the victor).
     */
    public function getVictor(): Company
    {
        return \$this->victor;
    }

    /**
     * Returns the loser (loser merges into the victor).
     */
    public function getLoser(): Company
    {
        return \$this->loser;
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
        return "@bundles/LeadBundle/Event/CompanyMergeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/CompanyMergeEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/CompanyMergeEvent.php");
    }
}
