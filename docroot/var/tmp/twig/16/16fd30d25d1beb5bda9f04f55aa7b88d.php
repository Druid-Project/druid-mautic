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

/* @bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php */
class __TwigTemplate_c849ff8317f4535a00ab108c7d2b91a0 extends Template
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

namespace Mautic\\FormBundle\\Validator\\Constraint;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class FileExtensionConstraintValidator extends ConstraintValidator
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed      \$value      The value that should be validated
     * @param Constraint \$constraint The constraint for the validation
     */
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!is_array(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["forbidden"]) || array_key_exists("forbidden", $context) ? $context["forbidden"] : (function () { throw new RuntimeError('Variable "forbidden" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "', '')
                ->addViolation();
        }

        \$blacklistedExtensions = \$this->coreParametersHelper->get('blacklisted_extensions');
        \$intersect             = array_intersect(\$value, \$blacklistedExtensions);
        if (\$intersect) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["forbidden"]) || array_key_exists("forbidden", $context) ? $context["forbidden"] : (function () { throw new RuntimeError('Variable "forbidden" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "', implode(', ', \$intersect))
                ->addViolation();
        }
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
        return "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  80 => 34,  69 => 26,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php", "/app/docroot/app/bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php");
    }
}
