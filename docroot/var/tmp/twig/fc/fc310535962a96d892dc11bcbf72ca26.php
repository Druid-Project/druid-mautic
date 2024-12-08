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

/* @bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php */
class __TwigTemplate_f62fe98cf2142ad03d122d7c5c33f25c extends Template
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

namespace Mautic\\UserBundle\\Form\\Validator\\Constraints;

use Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

final class NotWeakValidator extends ConstraintValidator
{
    public function __construct(private PasswordStrengthEstimatorModel \$passwordStrengthEstimatorModel)
    {
    }

    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$constraint instanceof NotWeak) {
            throw new UnexpectedTypeException(\$constraint, NotWeak::class);
        }

        if (\$this->passwordStrengthEstimatorModel->validate(\$value, \$constraint->score)) {
            return;
        }

        \$this->context->buildViolation(\$constraint->message)
            ->setCode(NotWeak::TOO_WEAK)
            ->addViolation();
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
        return "@bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php";
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
        return new Source("", "@bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php", "/app/docroot/app/bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php");
    }
}
