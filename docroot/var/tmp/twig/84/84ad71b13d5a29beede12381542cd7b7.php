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

/* @bundles/LeadBundle/Form/Validator/Constraints/DbRegexValidator.php */
class __TwigTemplate_6f0962919479e1247f3f7fdc1dcc438c extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Exception;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

final class DbRegexValidator extends ConstraintValidator
{
    public function __construct(private Connection \$connection)
    {
    }

    public function validate(\$regex, Constraint \$constraint): void
    {
        if (!\$constraint instanceof DbRegex) {
            throw new UnexpectedTypeException(\$constraint, DbRegex::class);
        }

        try {
            \$this->connection->executeQuery('SELECT 1 REGEXP ? AS is_valid', [\$regex]);
        } catch (Exception \$e) {
            \$this->context->buildViolation(
                \$this->stripUglyPartOfTheErrorMessage(\$e->getPrevious()->getMessage())
            )->addViolation();
        }
    }

    private function stripUglyPartOfTheErrorMessage(string \$message): string
    {
        return preg_replace('/SQLSTATE\\[\\d+\\]: [\\w ]+: \\d+ /', '', \$message);
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/DbRegexValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/DbRegexValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/DbRegexValidator.php");
    }
}
