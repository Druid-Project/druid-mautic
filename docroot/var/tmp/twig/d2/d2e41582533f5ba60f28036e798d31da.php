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

/* @bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php */
class __TwigTemplate_d2e60935944f9c3fe616239174f2ea98 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class EmailAddressValidator extends ConstraintValidator
{
    public function __construct(
        private EmailValidator \$emailValidator
    ) {
    }

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!empty(\$value)) {
            try {
                \$this->emailValidator->validate(\$value);
            } catch (InvalidEmailException \$invalidEmailException) {
                \$this->context->addViolation(
                    \$invalidEmailException->getMessage()
                );
            }
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php");
    }
}
