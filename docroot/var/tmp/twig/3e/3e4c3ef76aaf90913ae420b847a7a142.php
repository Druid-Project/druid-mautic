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

/* @bundles/LeadBundle/Entity/ExpressionHelperTrait.php */
class __TwigTemplate_a17a64082934056e51ebefcf8133fba5 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Doctrine\\DBAL\\Query\\QueryBuilder;

trait ExpressionHelperTrait
{
    /**
     * @param QueryBuilder|\\Doctrine\\ORM\\QueryBuilder \$q
     * @param                                         \$includeIsNull true/false or null to auto determine based on operator
     *
     * @return mixed
     */
    public function generateFilterExpression(\$q, \$column, \$operator, \$parameter, \$includeIsNull, CompositeExpression \$appendTo = null)
    {
        // in/notIn for dbal will use a raw array
        if (!is_array(\$parameter) && !str_starts_with(\$parameter, ':')) {
            \$parameter = \":\$parameter\";
        }

        if (null === \$includeIsNull) {
            // Auto determine based on negate operators
            \$includeIsNull = in_array(\$operator, ['neq', 'notLike', 'notIn']);
        }

        if (\$includeIsNull) {
            \$expr = \$q->expr()->or(
                \$q->expr()->\$operator(\$column, \$parameter),
                \$q->expr()->isNull(\$column)
            );
        } else {
            \$expr = \$q->expr()->\$operator(\$column, \$parameter);
        }

        if (\$appendTo) {
            return \$appendTo->with(\$expr);
        }

        return \$expr;
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
        return "@bundles/LeadBundle/Entity/ExpressionHelperTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/ExpressionHelperTrait.php", "/app/docroot/app/bundles/LeadBundle/Entity/ExpressionHelperTrait.php");
    }
}
