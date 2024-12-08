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

/* @bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php */
class __TwigTemplate_2b958cb4b4b383a5424fcdc0441fdff1 extends Template
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

use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class LeadListAccessValidator extends ConstraintValidator
{
    public function __construct(
        private ListModel \$segmentModel
    ) {
    }

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$constraint instanceof LeadListAccess) {
            throw new UnexpectedTypeException(\$constraint, LeadListAccess::class);
        }

        if (count(\$value)) {
            \$lists = \$this->segmentModel->getUserLists();
            foreach (\$value as \$l) {
                if (!isset(\$lists[\$l->getId()])) {
                    \$this->context->addViolation(
                        \$constraint->message,
                        ['%string%' => \$l->getName()]
                    );
                    break;
                }
            }
        } elseif (!\$constraint->allowEmpty) {
            \$this->context->addViolation(\$constraint->message);
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php");
    }
}
