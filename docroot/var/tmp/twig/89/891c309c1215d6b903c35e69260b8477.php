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

/* @bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php */
class __TwigTemplate_f30b5e986f5bf2ea100c3f7140ebca2a extends Template
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

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class SegmentInUseValidator extends ConstraintValidator
{
    public function __construct(
        private ListModel \$listModel
    ) {
    }

    /**
     * @param LeadList \$leadList
     */
    public function validate(\$leadList, Constraint \$constraint): void
    {
        if (!\$constraint instanceof SegmentInUse) {
            throw new UnexpectedTypeException(\$constraint, SegmentInUse::class);
        }

        if (!\$leadList->getId() || \$leadList->getIsPublished()) {
            return;
        }

        \$lists = \$this->listModel->getSegmentsWithDependenciesOnSegment(\$leadList->getId(), 'name');

        if (count(\$lists)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setCode((string) Response::HTTP_UNPROCESSABLE_ENTITY)
                ->setParameter('%segments%', implode(',', \$lists))
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/SegmentInUseValidator.php");
    }
}
