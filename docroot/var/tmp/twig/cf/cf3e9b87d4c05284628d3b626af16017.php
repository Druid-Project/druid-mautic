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

/* @bundles/LeadBundle/Validator/Constraints/SegmentDateValidator.php */
class __TwigTemplate_c1c26ef1a0247da4de07f67d15ce253c extends Template
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

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class SegmentDateValidator extends ConstraintValidator
{
    public function __construct(
        private ContactSegmentFilterFactory \$contactSegmentFilterFactory,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @param array<mixed> \$filters
     */
    public function validate(\$filters, Constraint \$constraint): void
    {
        foreach (\$filters as \$filter) {
            if (isset(\$filter['type']) && in_array(\$filter['type'], ['date', 'datetime'])) {
                \$segmentFilter  = \$this->contactSegmentFilterFactory->factorSegmentFilter(\$filter);
                \$parameterValue = \$segmentFilter->getParameterValue();

                if (is_array(\$parameterValue)) {
                    continue;
                }

                if (in_array(\$filter['operator'] ?? '', ['regexp', '!regexp', 'like', '!like', 'startsWith', 'endsWith', 'contains'])) {
                    continue;
                }

                if (null === \$parameterValue) {
                    continue;
                }

                if (str_contains(\$parameterValue, '%')) {
                    return;
                }

                \$formats  = ['Y-m-d', 'Y-m-d H:i', 'Y-m-d H:i:s'];

                foreach (\$formats as \$fmt) {
                    \$dateTime = \\DateTime::createFromFormat(\$fmt, \$parameterValue);
                    if (false !== \$dateTime) {
                        break;
                    }
                }

                if (false === \$dateTime) {
                    \$this->context->addViolation(\$this->translator->trans('mautic.lead.segment.date_invalid', ['%value%' => \$parameterValue], 'validators'));

                    return;
                }
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
        return "@bundles/LeadBundle/Validator/Constraints/SegmentDateValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/Constraints/SegmentDateValidator.php", "/app/docroot/app/bundles/LeadBundle/Validator/Constraints/SegmentDateValidator.php");
    }
}
