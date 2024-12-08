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

/* @bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php */
class __TwigTemplate_8091fbb45ed8e3b6aefef1a8a602f1be extends Template
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

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

class UniqueUserAliasValidator extends ConstraintValidator
{
    /**
     * @var LeadListRepository
     */
    public \$segmentRepository;

    /**
     * @var UserHelper
     */
    public \$userHelper;

    public function __construct(LeadListRepository \$segmentRepository, UserHelper \$userHelper)
    {
        \$this->segmentRepository = \$segmentRepository;
        \$this->userHelper        = \$userHelper;
    }

    public function validate(\$list, Constraint \$constraint): void
    {
        \$field = \$constraint->field;

        if (empty(\$field)) {
            throw new ConstraintDefinitionException('A field has to be specified.');
        }

        if (\$list->getAlias()) {
            \$lists = \$this->segmentRepository->getLists(
                \$this->userHelper->getUser(),
                \$list->getAlias(),
                \$list->getId()
            );

            if (count(\$lists)) {
                \$this->context->buildViolation(\$constraint->message)
                    ->atPath(\$field)
                    ->setParameter('%alias%', \$list->getAlias())
                    ->addViolation();
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAliasValidator.php");
    }
}
