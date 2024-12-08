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

/* @bundles/CampaignBundle/Form/Validator/Constraints/InfiniteLoopValidator.php */
class __TwigTemplate_7cbdb84f6001869e4d8e399da65f20d2 extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

final class InfiniteLoopValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$constraint instanceof InfiniteLoop) {
            throw new UnexpectedTypeException(\$constraint, InfiniteLoop::class);
        }

        \$data = \$this->context->getRoot()->getData();

        \$this->validateEvent(\$this->context, \$data['triggerMode'] ?? '', \$value, (int) (\$data['triggerInterval'] ?? 0), \$data['triggerIntervalUnit'] ?? '');
    }

    /**
     * @param string[] \$addTo
     */
    public function validateEvent(ExecutionContextInterface \$context, string \$triggerMode, array \$addTo, int \$triggerInterval, string \$triggerIntervalUnit): void
    {
        if (!in_array('this', \$addTo)) {
            return;
        }

        if ('immediate' === \$triggerMode) {
            \$context->buildViolation('mautic.campaign.infiniteloop.immediate')->addViolation();

            return;
        }

        if ('interval' === \$triggerMode && 'i' === \$triggerIntervalUnit && \$triggerInterval < 30) {
            \$context->buildViolation('mautic.campaign.infiniteloop.interval')
                ->setParameter('%count%', (string) \$triggerInterval)
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
        return "@bundles/CampaignBundle/Form/Validator/Constraints/InfiniteLoopValidator.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Validator/Constraints/InfiniteLoopValidator.php", "/app/docroot/app/bundles/CampaignBundle/Form/Validator/Constraints/InfiniteLoopValidator.php");
    }
}
