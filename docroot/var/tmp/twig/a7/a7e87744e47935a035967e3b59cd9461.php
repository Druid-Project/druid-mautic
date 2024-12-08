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

/* @bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php */
class __TwigTemplate_d7eb600e080798f6a2546e1f0c5b7702 extends Template
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

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumber;
use libphonenumber\\PhoneNumberUtil;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Phone number validator.
 */
class PhoneNumberConstraintValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint): void
    {
        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        \$phoneUtil = PhoneNumberUtil::getInstance();

        if (false === \$value instanceof PhoneNumber) {
            \$value = (string) \$value;
            try {
                \$phoneNumber = \$phoneUtil->parse(\$value, PhoneNumberUtil::UNKNOWN_REGION);
            } catch (NumberParseException) {
                \$this->addViolation(\$value, \$constraint);

                return;
            }
        }

        if (false === \$phoneUtil->isValidNumber(\$phoneNumber)) {
            \$this->addViolation(\$value, \$constraint);

            return;
        }
    }

    /**
     * Add a violation.
     *
     * @param mixed      \$value      the value that should be validated
     * @param Constraint \$constraint the constraint for the validation
     */
    private function addViolation(\$value, Constraint \$constraint): void
    {
        \$this->context->addViolation(
            \$constraint->getMessage(),
            ['";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "' => \$value]
        );
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
        return "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php";
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
        return array (  100 => 57,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php", "/app/docroot/app/bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php");
    }
}
