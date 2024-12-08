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

/* @bundles/LeadBundle/Event/ListFieldChoicesEvent.php */
class __TwigTemplate_49cf4bdb8e0fd24e5e635fa34102b322 extends Template
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

use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event that collects choices for different list field types.
 */
final class ListFieldChoicesEvent extends Event
{
    /**
     * @var array<string,mixed[]>
     */
    private array \$choicesForTypes = [];

    /**
     * @var array<string,mixed[]>
     */
    private array \$choicesForAliases = [];

    private string \$searchTerm = '';

    /**
     * @param mixed[] \$choices
     */
    public function setChoicesForFieldType(string \$fieldType, array \$choices): void
    {
        \$this->choicesForTypes[\$fieldType] = \$choices;
    }

    /**
     * @param mixed[] \$choices
     */
    public function setChoicesForFieldAlias(string \$fieldAlias, array \$choices): void
    {
        \$this->choicesForAliases[\$fieldAlias] = \$choices;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getChoicesForAllListFieldTypes(): array
    {
        return \$this->choicesForTypes;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getChoicesForAllListFieldAliases(): array
    {
        return \$this->choicesForAliases;
    }

    public function setSearchTerm(string \$searchTerm): void
    {
        \$this->searchTerm = \$searchTerm;
    }

    public function getSearchTerm(): string
    {
        return \$this->searchTerm;
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
        return "@bundles/LeadBundle/Event/ListFieldChoicesEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListFieldChoicesEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/ListFieldChoicesEvent.php");
    }
}
