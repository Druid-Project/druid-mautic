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

/* @bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php */
class __TwigTemplate_08669c98b45075997636b552d16c2625 extends Template
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

namespace Mautic\\LeadBundle\\Validator\\Constraints;

use Mautic\\CoreBundle\\Exception\\RecordNotUnpublishedException;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Validator\\SegmentUsedInCampaignsValidator as InternalValidator;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class SegmentUsedInCampaignsValidator extends ConstraintValidator
{
    public function __construct(private InternalValidator \$internalValidator)
    {
    }

    public function validate(\$segment, Constraint \$constraint): void
    {
        try {
            /** @var LeadList \$segment */
            if (\$segment->getIsPublished()) {
                return;
            }

            \$this->internalValidator->validate(\$segment);
        } catch (RecordNotUnpublishedException \$exception) {
            \$this->context->buildViolation(\$exception->getMessage())
                ->atPath('isPublished')
                ->setCode((string) Response::HTTP_UNPROCESSABLE_ENTITY)
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
        return "@bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php", "/app/docroot/app/bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php");
    }
}
